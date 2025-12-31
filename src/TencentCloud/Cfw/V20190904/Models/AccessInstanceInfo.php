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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入防火墙实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceType() 获取实例类型VPC or DIRECTCONNECT等类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型VPC or DIRECTCONNECT等类型
 * @method string getInstanceRegion() 获取实例所在地域
 * @method void setInstanceRegion(string $InstanceRegion) 设置实例所在地域
 * @method integer getAccessCidrMode() 获取接入防火墙的网段模式：0-不接入，1-接入实例关联的所有网段，2-接入用户自定义的网段
 * @method void setAccessCidrMode(integer $AccessCidrMode) 设置接入防火墙的网段模式：0-不接入，1-接入实例关联的所有网段，2-接入用户自定义的网段
 * @method array getAccessCidrList() 获取接入防火墙的网段列表
 * @method void setAccessCidrList(array $AccessCidrList) 设置接入防火墙的网段列表
 */
class AccessInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例类型VPC or DIRECTCONNECT等类型
     */
    public $InstanceType;

    /**
     * @var string 实例所在地域
     */
    public $InstanceRegion;

    /**
     * @var integer 接入防火墙的网段模式：0-不接入，1-接入实例关联的所有网段，2-接入用户自定义的网段
     */
    public $AccessCidrMode;

    /**
     * @var array 接入防火墙的网段列表
     */
    public $AccessCidrList;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceType 实例类型VPC or DIRECTCONNECT等类型
     * @param string $InstanceRegion 实例所在地域
     * @param integer $AccessCidrMode 接入防火墙的网段模式：0-不接入，1-接入实例关联的所有网段，2-接入用户自定义的网段
     * @param array $AccessCidrList 接入防火墙的网段列表
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("AccessCidrMode",$param) and $param["AccessCidrMode"] !== null) {
            $this->AccessCidrMode = $param["AccessCidrMode"];
        }

        if (array_key_exists("AccessCidrList",$param) and $param["AccessCidrList"] !== null) {
            $this->AccessCidrList = $param["AccessCidrList"];
        }
    }
}
