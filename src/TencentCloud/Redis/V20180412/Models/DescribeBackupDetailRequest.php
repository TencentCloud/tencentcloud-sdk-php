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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDetail请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getBackupId() 获取<p>备份 ID，可通过接口 <a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a> 返回的参数 <strong>RedisBackupSet</strong> 获取。</p>
 * @method void setBackupId(string $BackupId) 设置<p>备份 ID，可通过接口 <a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a> 返回的参数 <strong>RedisBackupSet</strong> 获取。</p>
 */
class DescribeBackupDetailRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>备份 ID，可通过接口 <a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a> 返回的参数 <strong>RedisBackupSet</strong> 获取。</p>
     */
    public $BackupId;

    /**
     * @param string $InstanceId <p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis/instance/list">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $BackupId <p>备份 ID，可通过接口 <a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a> 返回的参数 <strong>RedisBackupSet</strong> 获取。</p>
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }
    }
}
