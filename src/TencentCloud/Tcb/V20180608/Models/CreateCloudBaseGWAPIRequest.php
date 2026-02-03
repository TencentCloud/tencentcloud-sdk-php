<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudBaseGWAPI请求参数结构体
 *
 * @method string getServiceId() 获取Service ID
 * @method void setServiceId(string $ServiceId) 设置Service ID
 * @method string getPath() 获取API Path
 * @method void setPath(string $Path) 设置API Path
 * @method integer getType() 获取API类型（1表示云函数，2表示容器）
 * @method void setType(integer $Type) 设置API类型（1表示云函数，2表示容器）
 * @method string getName() 获取API Name
 * @method void setName(string $Name) 设置API Name
 * @method string getAPIId() 获取APIId，如果非空，表示修改绑定Path
 * @method void setAPIId(string $APIId) 设置APIId，如果非空，表示修改绑定Path
 * @method string getCustom() 获取自定义值通用字段（当Type为容器时必填）
 * @method void setCustom(string $Custom) 设置自定义值通用字段（当Type为容器时必填）
 * @method integer getAuthSwitch() 获取认证开关 1为开启 2为关闭
 * @method void setAuthSwitch(integer $AuthSwitch) 设置认证开关 1为开启 2为关闭
 * @method boolean getEnableRegion() 获取是否开启多地域
 * @method void setEnableRegion(boolean $EnableRegion) 设置是否开启多地域
 * @method boolean getEnableUnion() 获取是否启用统一域名
 * @method void setEnableUnion(boolean $EnableUnion) 设置是否启用统一域名
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getAccessTypes() 获取访问类型："OA", "PUBLIC", "MINIAPP", "VPC" （不传默认PUBLIC+MINIAPP+VPC）
 * @method void setAccessTypes(array $AccessTypes) 设置访问类型："OA", "PUBLIC", "MINIAPP", "VPC" （不传默认PUBLIC+MINIAPP+VPC）
 * @method boolean getIsShortPath() 获取是否开启路径透传，默认true表示短路径，即不开启路径透传(已弃用)
 * @method void setIsShortPath(boolean $IsShortPath) 设置是否开启路径透传，默认true表示短路径，即不开启路径透传(已弃用)
 * @method integer getPathTransmission() 获取路径透传，默认0关闭，1开启，2关闭
 * @method void setPathTransmission(integer $PathTransmission) 设置路径透传，默认0关闭，1开启，2关闭
 * @method integer getEnableCheckAcrossDomain() 获取跨域校验，默认0开启，1开启，2关闭
 * @method void setEnableCheckAcrossDomain(integer $EnableCheckAcrossDomain) 设置跨域校验，默认0开启，1开启，2关闭
 * @method string getStaticFileDirectory() 获取静态托管资源目录
 * @method void setStaticFileDirectory(string $StaticFileDirectory) 设置静态托管资源目录
 */
class CreateCloudBaseGWAPIRequest extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var string API Path
     */
    public $Path;

    /**
     * @var integer API类型（1表示云函数，2表示容器）
     */
    public $Type;

    /**
     * @var string API Name
     */
    public $Name;

    /**
     * @var string APIId，如果非空，表示修改绑定Path
     */
    public $APIId;

    /**
     * @var string 自定义值通用字段（当Type为容器时必填）
     */
    public $Custom;

    /**
     * @var integer 认证开关 1为开启 2为关闭
     */
    public $AuthSwitch;

    /**
     * @var boolean 是否开启多地域
     */
    public $EnableRegion;

    /**
     * @var boolean 是否启用统一域名
     */
    public $EnableUnion;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 访问类型："OA", "PUBLIC", "MINIAPP", "VPC" （不传默认PUBLIC+MINIAPP+VPC）
     */
    public $AccessTypes;

    /**
     * @var boolean 是否开启路径透传，默认true表示短路径，即不开启路径透传(已弃用)
     */
    public $IsShortPath;

    /**
     * @var integer 路径透传，默认0关闭，1开启，2关闭
     */
    public $PathTransmission;

    /**
     * @var integer 跨域校验，默认0开启，1开启，2关闭
     */
    public $EnableCheckAcrossDomain;

    /**
     * @var string 静态托管资源目录
     */
    public $StaticFileDirectory;

    /**
     * @param string $ServiceId Service ID
     * @param string $Path API Path
     * @param integer $Type API类型（1表示云函数，2表示容器）
     * @param string $Name API Name
     * @param string $APIId APIId，如果非空，表示修改绑定Path
     * @param string $Custom 自定义值通用字段（当Type为容器时必填）
     * @param integer $AuthSwitch 认证开关 1为开启 2为关闭
     * @param boolean $EnableRegion 是否开启多地域
     * @param boolean $EnableUnion 是否启用统一域名
     * @param string $Domain 域名
     * @param array $AccessTypes 访问类型："OA", "PUBLIC", "MINIAPP", "VPC" （不传默认PUBLIC+MINIAPP+VPC）
     * @param boolean $IsShortPath 是否开启路径透传，默认true表示短路径，即不开启路径透传(已弃用)
     * @param integer $PathTransmission 路径透传，默认0关闭，1开启，2关闭
     * @param integer $EnableCheckAcrossDomain 跨域校验，默认0开启，1开启，2关闭
     * @param string $StaticFileDirectory 静态托管资源目录
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }

        if (array_key_exists("AuthSwitch",$param) and $param["AuthSwitch"] !== null) {
            $this->AuthSwitch = $param["AuthSwitch"];
        }

        if (array_key_exists("EnableRegion",$param) and $param["EnableRegion"] !== null) {
            $this->EnableRegion = $param["EnableRegion"];
        }

        if (array_key_exists("EnableUnion",$param) and $param["EnableUnion"] !== null) {
            $this->EnableUnion = $param["EnableUnion"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AccessTypes",$param) and $param["AccessTypes"] !== null) {
            $this->AccessTypes = $param["AccessTypes"];
        }

        if (array_key_exists("IsShortPath",$param) and $param["IsShortPath"] !== null) {
            $this->IsShortPath = $param["IsShortPath"];
        }

        if (array_key_exists("PathTransmission",$param) and $param["PathTransmission"] !== null) {
            $this->PathTransmission = $param["PathTransmission"];
        }

        if (array_key_exists("EnableCheckAcrossDomain",$param) and $param["EnableCheckAcrossDomain"] !== null) {
            $this->EnableCheckAcrossDomain = $param["EnableCheckAcrossDomain"];
        }

        if (array_key_exists("StaticFileDirectory",$param) and $param["StaticFileDirectory"] !== null) {
            $this->StaticFileDirectory = $param["StaticFileDirectory"];
        }
    }
}
