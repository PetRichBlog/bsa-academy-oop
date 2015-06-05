<?php

interface PhotoCamera {
    public function setFocus();
    public function setImageFormat($format);
}

interface VideoCamera {
    public function setFrameRate();
}

interface Camera extends PhotoCamera, VideoCamera {
    public function capture();
}

class PhoneCamera implements Camera {
    public function setFocus()
    {
        // TODO: Implement setFocus() method.
    }

    public function setImageFormat($format)
    {
        // TODO: Implement setImageFormat() method.
    }

    public function setFrameRate()
    {
        // TODO: Implement setFrameRate() method.
    }

    public function capture()
    {
        // TODO: Implement capture() method.
    }
}