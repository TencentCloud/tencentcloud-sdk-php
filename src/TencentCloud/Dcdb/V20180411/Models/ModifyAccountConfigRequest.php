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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：tdsqlshard-kpkvq5oj，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：tdsqlshard-kpkvq5oj，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getUserName() 获取账号的名称
 * @method void setUserName(string $UserName) 设置账号的名称
 * @method string getHost() 获取账号的域名
 * @method void setHost(string $Host) 设置账号的域名
 * @method array getConfigs() 获取配置列表，每一个元素是Config和Value的组合
 * @method void setConfigs(array $Configs) 设置配置列表，每一个元素是Config和Value的组合
 */
class ModifyAccountConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：tdsqlshard-kpkvq5oj，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 账号的名称
     */
    public $UserName;

    /**
     * @var string 账号的域名
     */
    public $Host;

    /**
     * @var array 配置列表，每一个元素是Config和Value的组合
     */
    public $Configs;

    /**
     * @param string $InstanceId 实例 ID，格式如：tdsqlshard-kpkvq5oj，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $UserName 账号的名称
     * @param string $Host 账号的域名
     * @param array $Configs 配置列表，每一个元素是Config和Value的组合
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new ConfigValue();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }
    }
}
