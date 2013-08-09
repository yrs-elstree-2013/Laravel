<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alexanderchristie
 * Date: 08/08/2013
 * Time: 14:29
 * To change this template use File | Settings | File Templates.
 */

class UserController extends BaseController {

    public function getIndex() {
        if ( Sentry::getUser() != null ) {
            return View::make('cPanel')->with('title', 'Control Panel')->with('isHome', false)->with('user', Sentry::getUser())->with('projects', array());
        } else {
            return View::make('signup')->with('title', 'Sign Up!')->with('isHome', false)->with('user', Sentry::getUser());
        }
    }

    public function postLogin() {
        Redirect::to('user');
        $username = Input::get('username');
        $password = Input::get('password');

        if ( $username != null && $password != null ) {

            try
            {
                // Set login credentials
                $credentials = array(
                    'email'    => $username,
                    'password' => $password,
                );

                // Try to authenticate the user
                $user = Sentry::authenticate($credentials, false);

                Sentry::login($user, Input::get('user_rememberme'));

                return Redirect::to('user');
            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                echo 'Login field is required.';
            }
            catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
            {
                echo 'Password field is required.';
            }
            catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
            {
                echo 'Wrong password, try again.';
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                echo 'User was not found.';
            }
            catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
            {
                echo 'User is not activated.';
            }
        }
    }

    public function postSignup() {
        try
        {
            // Create the user
            $user = Sentry::getUserProvider()->create(array(
                'email'    => Input::get('username'),
                'password' => Input::get('password'),
                'first_name' => Input::get('first_name'),
                'last_name' => Input::get('last_name'),
            ));

            $activationCode = $user->getActivationCode();
            $user->attemptActivation($activationCode);
            Sentry::login($user, true);

            return Redirect::to('user');

        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            echo 'User with this login already exists.';
        }
    }

    public function getSignup() {
        return View::make('signup')->with('title', 'Sign Up')->with('isHome', false)->with('user', null);
    }

    public function getLogout() {
        Sentry::logout();

        return Redirect::to('/');
    }

}