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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManualBackupInstance请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method string getRemark() 获取手动备份任务的备注信息。
 * @method void setRemark(string $Remark) 设置手动备份任务的备注信息。
 * @method integer getStorageDays() 获取备份数据的保存天数。
- 单位：天；默认值为7天；取值范围：[0.1825]。如果超过 7天，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
- 如果不配置该参数，默认与自动备份的保留时间一致。
- 如果未设置自动备份，默认为7天。
 * @method void setStorageDays(integer $StorageDays) 设置备份数据的保存天数。
- 单位：天；默认值为7天；取值范围：[0.1825]。如果超过 7天，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
- 如果不配置该参数，默认与自动备份的保留时间一致。
- 如果未设置自动备份，默认为7天。
 */
class ManualBackupInstanceRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 手动备份任务的备注信息。
     */
    public $Remark;

    /**
     * @var integer 备份数据的保存天数。
- 单位：天；默认值为7天；取值范围：[0.1825]。如果超过 7天，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
- 如果不配置该参数，默认与自动备份的保留时间一致。
- 如果未设置自动备份，默认为7天。
     */
    public $StorageDays;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     * @param string $Remark 手动备份任务的备注信息。
     * @param integer $StorageDays 备份数据的保存天数。
- 单位：天；默认值为7天；取值范围：[0.1825]。如果超过 7天，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
- 如果不配置该参数，默认与自动备份的保留时间一致。
- 如果未设置自动备份，默认为7天。
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StorageDays",$param) and $param["StorageDays"] !== null) {
            $this->StorageDays = $param["StorageDays"];
        }
    }
}
