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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRemoteDiskAttributes请求参数结构体
 *
 * @method array getRemoteDiskIds() 获取<p>一个或多个待操作的单副本SSD硬盘ID。如果传入多个单副本SSD硬盘ID，只支持所有硬盘修改为同一属性。</p>
 * @method void setRemoteDiskIds(array $RemoteDiskIds) 设置<p>一个或多个待操作的单副本SSD硬盘ID。如果传入多个单副本SSD硬盘ID，只支持所有硬盘修改为同一属性。</p>
 * @method string getDiskName() 获取<p>新的单副本SSD硬盘名称</p>
 * @method void setDiskName(string $DiskName) 设置<p>新的单副本SSD硬盘名称</p>
 * @method integer getProjectId() 获取<p>新的单副本SSD硬盘项目ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>新的单副本SSD硬盘项目ID。</p>
 * @method string getAutoRenewFlag() 获取<p>云硬盘的自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
 * @method void setAutoRenewFlag(string $AutoRenewFlag) 设置<p>云硬盘的自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
 */
class ModifyRemoteDiskAttributesRequest extends AbstractModel
{
    /**
     * @var array <p>一个或多个待操作的单副本SSD硬盘ID。如果传入多个单副本SSD硬盘ID，只支持所有硬盘修改为同一属性。</p>
     */
    public $RemoteDiskIds;

    /**
     * @var string <p>新的单副本SSD硬盘名称</p>
     */
    public $DiskName;

    /**
     * @var integer <p>新的单副本SSD硬盘项目ID。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>云硬盘的自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @param array $RemoteDiskIds <p>一个或多个待操作的单副本SSD硬盘ID。如果传入多个单副本SSD硬盘ID，只支持所有硬盘修改为同一属性。</p>
     * @param string $DiskName <p>新的单副本SSD硬盘名称</p>
     * @param integer $ProjectId <p>新的单副本SSD硬盘项目ID。</p>
     * @param string $AutoRenewFlag <p>云硬盘的自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_AUTO_RENEW： 通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW： 通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知过期不自动续费</li></ul>
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
        if (array_key_exists("RemoteDiskIds",$param) and $param["RemoteDiskIds"] !== null) {
            $this->RemoteDiskIds = $param["RemoteDiskIds"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
