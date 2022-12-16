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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchWaterPrintConfig请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID
 * @method integer getOpenStatus() 获取水印开启/关闭状态，1表示开启；0表示关闭
 * @method void setOpenStatus(integer $OpenStatus) 设置水印开启/关闭状态，1表示开启；0表示关闭
 * @method integer getCloudSdkProxy() 获取是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
 * @method void setCloudSdkProxy(integer $CloudSdkProxy) 设置是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
 */
class SwitchWaterPrintConfigRequest extends AbstractModel
{
    /**
     * @var string 资源实例ID
     */
    public $InstanceId;

    /**
     * @var integer 水印开启/关闭状态，1表示开启；0表示关闭
     */
    public $OpenStatus;

    /**
     * @var integer 是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
     */
    public $CloudSdkProxy;

    /**
     * @param string $InstanceId 资源实例ID
     * @param integer $OpenStatus 水印开启/关闭状态，1表示开启；0表示关闭
     * @param integer $CloudSdkProxy 是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
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

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("CloudSdkProxy",$param) and $param["CloudSdkProxy"] !== null) {
            $this->CloudSdkProxy = $param["CloudSdkProxy"];
        }
    }
}
