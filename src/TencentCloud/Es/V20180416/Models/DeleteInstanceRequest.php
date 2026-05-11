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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method boolean getLockEnabled() 获取<p>回收站锁定设置，true时不可手动销毁，到预设时间后自动销毁</p><p>默认值：false</p>
 * @method void setLockEnabled(boolean $LockEnabled) 设置<p>回收站锁定设置，true时不可手动销毁，到预设时间后自动销毁</p><p>默认值：false</p>
 * @method integer getLockDuration() 获取<p>放入回收站的锁定时间</p><p>取值范围：[1, 7]</p><p>单位：天</p><p>默认值：1</p>
 * @method void setLockDuration(integer $LockDuration) 设置<p>放入回收站的锁定时间</p><p>取值范围：[1, 7]</p><p>单位：天</p><p>默认值：1</p>
 */
class DeleteInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>回收站锁定设置，true时不可手动销毁，到预设时间后自动销毁</p><p>默认值：false</p>
     */
    public $LockEnabled;

    /**
     * @var integer <p>放入回收站的锁定时间</p><p>取值范围：[1, 7]</p><p>单位：天</p><p>默认值：1</p>
     */
    public $LockDuration;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param boolean $LockEnabled <p>回收站锁定设置，true时不可手动销毁，到预设时间后自动销毁</p><p>默认值：false</p>
     * @param integer $LockDuration <p>放入回收站的锁定时间</p><p>取值范围：[1, 7]</p><p>单位：天</p><p>默认值：1</p>
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

        if (array_key_exists("LockEnabled",$param) and $param["LockEnabled"] !== null) {
            $this->LockEnabled = $param["LockEnabled"];
        }

        if (array_key_exists("LockDuration",$param) and $param["LockDuration"] !== null) {
            $this->LockDuration = $param["LockDuration"];
        }
    }
}
