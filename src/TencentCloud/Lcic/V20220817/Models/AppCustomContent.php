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
 * @method string getLogoUrl() 获取logo地址，用于上课时展示的课堂或平台图标，支持开发商自定义业务品牌展示。
 * @method void setLogoUrl(string $LogoUrl) 设置logo地址，用于上课时展示的课堂或平台图标，支持开发商自定义业务品牌展示。
 * @method string getHomeUrl() 获取HomeUrl：主页地址，用于上课结束后课堂跳转，支持跳转到自己的业务系统。如果配置为空则下课后关闭课堂页面。
 * @method void setHomeUrl(string $HomeUrl) 设置HomeUrl：主页地址，用于上课结束后课堂跳转，支持跳转到自己的业务系统。如果配置为空则下课后关闭课堂页面。
 * @method string getJsUrl() 获取JsUrl ：自定义js。针对应用用于开发上自定义课堂界面、模块功能、监控操作，支持数据请求与响应处理。
 * @method void setJsUrl(string $JsUrl) 设置JsUrl ：自定义js。针对应用用于开发上自定义课堂界面、模块功能、监控操作，支持数据请求与响应处理。
 * @method string getCssUrl() 获取Css : 自定义的css。针对应用用于支持课堂界面的、模块的UI渲染修改、皮肤配色修改、功能模块的隐藏和展示。
 * @method void setCssUrl(string $CssUrl) 设置Css : 自定义的css。针对应用用于支持课堂界面的、模块的UI渲染修改、皮肤配色修改、功能模块的隐藏和展示。
 */
class AppCustomContent extends AbstractModel
{
    /**
     * @var string 场景参数，一个应用下可以设置多个不同场景。
     */
    public $Scene;

    /**
     * @var string logo地址，用于上课时展示的课堂或平台图标，支持开发商自定义业务品牌展示。
     */
    public $LogoUrl;

    /**
     * @var string HomeUrl：主页地址，用于上课结束后课堂跳转，支持跳转到自己的业务系统。如果配置为空则下课后关闭课堂页面。
     */
    public $HomeUrl;

    /**
     * @var string JsUrl ：自定义js。针对应用用于开发上自定义课堂界面、模块功能、监控操作，支持数据请求与响应处理。
     */
    public $JsUrl;

    /**
     * @var string Css : 自定义的css。针对应用用于支持课堂界面的、模块的UI渲染修改、皮肤配色修改、功能模块的隐藏和展示。
     */
    public $CssUrl;

    /**
     * @param string $Scene 场景参数，一个应用下可以设置多个不同场景。
     * @param string $LogoUrl logo地址，用于上课时展示的课堂或平台图标，支持开发商自定义业务品牌展示。
     * @param string $HomeUrl HomeUrl：主页地址，用于上课结束后课堂跳转，支持跳转到自己的业务系统。如果配置为空则下课后关闭课堂页面。
     * @param string $JsUrl JsUrl ：自定义js。针对应用用于开发上自定义课堂界面、模块功能、监控操作，支持数据请求与响应处理。
     * @param string $CssUrl Css : 自定义的css。针对应用用于支持课堂界面的、模块的UI渲染修改、皮肤配色修改、功能模块的隐藏和展示。
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
