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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例serverless弹性配置详情
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceType() 获取<p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
 * @method float getMaxCcu() 获取<p>最大CCU规格</p>
 * @method void setMaxCcu(float $MaxCcu) 设置<p>最大CCU规格</p>
 * @method string getStatus() 获取<p>实例Serverless弹性开启状态</p><p>枚举值：</p><ul><li>opening： 开启中</li><li>opened： 已开启</li><li>closing： 关闭中</li><li>closed： 已关闭</li></ul>
 * @method void setStatus(string $Status) 设置<p>实例Serverless弹性开启状态</p><p>枚举值：</p><ul><li>opening： 开启中</li><li>opened： 已开启</li><li>closing： 关闭中</li><li>closed： 已关闭</li></ul>
 * @method string getEnableTime() 获取<p>开启Serverless弹性的时间</p>
 * @method void setEnableTime(string $EnableTime) 设置<p>开启Serverless弹性的时间</p>
 */
class InstanceServerlessQuotaInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
     */
    public $InstanceType;

    /**
     * @var float <p>最大CCU规格</p>
     */
    public $MaxCcu;

    /**
     * @var string <p>实例Serverless弹性开启状态</p><p>枚举值：</p><ul><li>opening： 开启中</li><li>opened： 已开启</li><li>closing： 关闭中</li><li>closed： 已关闭</li></ul>
     */
    public $Status;

    /**
     * @var string <p>开启Serverless弹性的时间</p>
     */
    public $EnableTime;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceType <p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
     * @param float $MaxCcu <p>最大CCU规格</p>
     * @param string $Status <p>实例Serverless弹性开启状态</p><p>枚举值：</p><ul><li>opening： 开启中</li><li>opened： 已开启</li><li>closing： 关闭中</li><li>closed： 已关闭</li></ul>
     * @param string $EnableTime <p>开启Serverless弹性的时间</p>
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

        if (array_key_exists("MaxCcu",$param) and $param["MaxCcu"] !== null) {
            $this->MaxCcu = $param["MaxCcu"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableTime",$param) and $param["EnableTime"] !== null) {
            $this->EnableTime = $param["EnableTime"];
        }
    }
}
