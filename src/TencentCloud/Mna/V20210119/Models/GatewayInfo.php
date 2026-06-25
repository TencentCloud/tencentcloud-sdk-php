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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关信息
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getGatewayName() 获取<p>网关名称</p>
 * @method void setGatewayName(string $GatewayName) 设置<p>网关名称</p>
 * @method integer getCreateTime() 获取<p>创建时间，单位：秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，单位：秒</p>
 * @method integer getStatus() 获取<p>网关状态。0：正常，1：异常</p>
 * @method void setStatus(integer $Status) 设置<p>网关状态。0：正常，1：异常</p>
 * @method integer getInstanceSize() 获取<p>网关实例数</p>
 * @method void setInstanceSize(integer $InstanceSize) 设置<p>网关实例数</p>
 */
class GatewayInfo extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>网关名称</p>
     */
    public $GatewayName;

    /**
     * @var integer <p>创建时间，单位：秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>网关状态。0：正常，1：异常</p>
     */
    public $Status;

    /**
     * @var integer <p>网关实例数</p>
     */
    public $InstanceSize;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $GatewayName <p>网关名称</p>
     * @param integer $CreateTime <p>创建时间，单位：秒</p>
     * @param integer $Status <p>网关状态。0：正常，1：异常</p>
     * @param integer $InstanceSize <p>网关实例数</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceSize",$param) and $param["InstanceSize"] !== null) {
            $this->InstanceSize = $param["InstanceSize"];
        }
    }
}
