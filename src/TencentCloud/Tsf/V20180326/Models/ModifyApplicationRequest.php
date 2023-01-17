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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationDesc() 获取应用备注
 * @method void setApplicationDesc(string $ApplicationDesc) 设置应用备注
 * @method string getApplicationRemarkName() 获取应用备注名
 * @method void setApplicationRemarkName(string $ApplicationRemarkName) 设置应用备注名
 * @method array getServiceConfigList() 获取服务配置信息列表
 * @method void setServiceConfigList(array $ServiceConfigList) 设置服务配置信息列表
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 应用备注
     */
    public $ApplicationDesc;

    /**
     * @var string 应用备注名
     */
    public $ApplicationRemarkName;

    /**
     * @var array 服务配置信息列表
     */
    public $ServiceConfigList;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationDesc 应用备注
     * @param string $ApplicationRemarkName 应用备注名
     * @param array $ServiceConfigList 服务配置信息列表
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationDesc",$param) and $param["ApplicationDesc"] !== null) {
            $this->ApplicationDesc = $param["ApplicationDesc"];
        }

        if (array_key_exists("ApplicationRemarkName",$param) and $param["ApplicationRemarkName"] !== null) {
            $this->ApplicationRemarkName = $param["ApplicationRemarkName"];
        }

        if (array_key_exists("ServiceConfigList",$param) and $param["ServiceConfigList"] !== null) {
            $this->ServiceConfigList = [];
            foreach ($param["ServiceConfigList"] as $key => $value){
                $obj = new ServiceConfig();
                $obj->deserialize($value);
                array_push($this->ServiceConfigList, $obj);
            }
        }
    }
}
