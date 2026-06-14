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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackupDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getBackupMethod() 获取<p>设置备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
 * @method void setBackupMethod(integer $BackupMethod) 设置<p>设置备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
 * @method string getBackupRemark() 获取<p>备份备注信息。</p>
 * @method void setBackupRemark(string $BackupRemark) 设置<p>备份备注信息。</p>
 * @method integer getBackupRetentionDays() 获取<p>保存天数，-2-永久保留（不定期保留），-1-跟随长期保留时长，0-按配置天数，1~7300-自定义天数（最长20年）</p><p>单位：天</p>
 * @method void setBackupRetentionDays(integer $BackupRetentionDays) 设置<p>保存天数，-2-永久保留（不定期保留），-1-跟随长期保留时长，0-按配置天数，1~7300-自定义天数（最长20年）</p><p>单位：天</p>
 */
class CreateBackupDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>设置备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
     */
    public $BackupMethod;

    /**
     * @var string <p>备份备注信息。</p>
     */
    public $BackupRemark;

    /**
     * @var integer <p>保存天数，-2-永久保留（不定期保留），-1-跟随长期保留时长，0-按配置天数，1~7300-自定义天数（最长20年）</p><p>单位：天</p>
     */
    public $BackupRetentionDays;

    /**
     * @param string $InstanceId <p>实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $BackupMethod <p>设置备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
     * @param string $BackupRemark <p>备份备注信息。</p>
     * @param integer $BackupRetentionDays <p>保存天数，-2-永久保留（不定期保留），-1-跟随长期保留时长，0-按配置天数，1~7300-自定义天数（最长20年）</p><p>单位：天</p>
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupRemark",$param) and $param["BackupRemark"] !== null) {
            $this->BackupRemark = $param["BackupRemark"];
        }

        if (array_key_exists("BackupRetentionDays",$param) and $param["BackupRetentionDays"] !== null) {
            $this->BackupRetentionDays = $param["BackupRetentionDays"];
        }
    }
}
