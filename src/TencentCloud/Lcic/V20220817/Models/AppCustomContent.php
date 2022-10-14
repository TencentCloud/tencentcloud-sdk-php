<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用自定义内容
 *
 * @method string getScene() 获取场景参数，一个应用下可以设置多个不同场景。
 * @method void setScene(string $Scene) 设置场景参数，一个应用下可以设置多个不同场景。
 * @method string getLogoUrl() 获取logo地址。
 * @method void setLogoUrl(string $LogoUrl) 设置logo地址。
 * @method string getHomeUrl() 获取主页地址，可设置用于跳转。
 * @method void setHomeUrl(string $HomeUrl) 设置主页地址，可设置用于跳转。
 * @method string getJsUrl() 获取自定义的js。
 * @method void setJsUrl(string $JsUrl) 设置自定义的js。
 * @method string getCssUrl() 获取自定义的css。
 * @method void setCssUrl(string $CssUrl) 设置自定义的css。
 */
class AppCustomContent extends AbstractModel
{
    /**
     * @var string 场景参数，一个应用下可以设置多个不同场景。
     */
    public $Scene;

    /**
     * @var string logo地址。
     */
    public $LogoUrl;

    /**
     * @var string 主页地址，可设置用于跳转。
     */
    public $HomeUrl;

    /**
     * @var string 自定义的js。
     */
    public $JsUrl;

    /**
     * @var string 自定义的css。
     */
    public $CssUrl;

    /**
     * @param string $Scene 场景参数，一个应用下可以设置多个不同场景。
     * @param string $LogoUrl logo地址。
     * @param string $HomeUrl 主页地址，可设置用于跳转。
     * @param string $JsUrl 自定义的js。
     * @param string $CssUrl 自定义的css。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("LogoUrl",$param) and $param["LogoUrl"] !== null) {
            $this->LogoUrl = $param["LogoUrl"];
        }

        if (array_key_exists("HomeUrl",$param) and $param["HomeUrl"] !== null) {
            $this->HomeUrl = $param["HomeUrl"];
        }

        if (array_key_exists("JsUrl",$param) and $param["JsUrl"] !== null) {
            $this->JsUrl = $param["JsUrl"];
        }

        if (array_key_exists("CssUrl",$param) and $param["CssUrl"] !== null) {
            $this->CssUrl = $param["CssUrl"];
        }
    }
}
