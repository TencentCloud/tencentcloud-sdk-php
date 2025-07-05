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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由接收策略列表
 *
 * @method array getPolicys() 获取策略列表。
 * @method void setPolicys(array $Policys) 设置策略列表。
 * @method integer getPolicyVersion() 获取版本号。
 * @method void setPolicyVersion(integer $PolicyVersion) 设置版本号。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 */
class CcnRouteTableInputPolicys extends AbstractModel
{
    /**
     * @var array 策略列表。
     */
    public $Policys;

    /**
     * @var integer 版本号。
     */
    public $PolicyVersion;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @param array $Policys 策略列表。
     * @param integer $PolicyVersion 版本号。
     * @param string $CreateTime 创建时间。
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
        if (array_key_exists("Policys",$param) and $param["Policys"] !== null) {
            $this->Policys = [];
            foreach ($param["Policys"] as $key => $value){
                $obj = new CcnRouteTableInputPolicy();
                $obj->deserialize($value);
                array_push($this->Policys, $obj);
            }
        }

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
