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
 * DetachRemoteDisks请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定从特定CVM实例上卸载单副本SSD硬盘。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定从特定CVM实例上卸载单副本SSD硬盘。</p>
 * @method array getRemoteDiskIds() 获取<p>一个或多个将要卸载的单副本SSD硬盘ID。</p>
 * @method void setRemoteDiskIds(array $RemoteDiskIds) 设置<p>一个或多个将要卸载的单副本SSD硬盘ID。</p>
 * @method boolean getForceDetach() 获取<p>强制解挂，内部使用。</p>
 * @method void setForceDetach(boolean $ForceDetach) 设置<p>强制解挂，内部使用。</p>
 */
class DetachRemoteDisksRequest extends AbstractModel
{
    /**
     * @var string <p>指定从特定CVM实例上卸载单副本SSD硬盘。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>一个或多个将要卸载的单副本SSD硬盘ID。</p>
     */
    public $RemoteDiskIds;

    /**
     * @var boolean <p>强制解挂，内部使用。</p>
     */
    public $ForceDetach;

    /**
     * @param string $InstanceId <p>指定从特定CVM实例上卸载单副本SSD硬盘。</p>
     * @param array $RemoteDiskIds <p>一个或多个将要卸载的单副本SSD硬盘ID。</p>
     * @param boolean $ForceDetach <p>强制解挂，内部使用。</p>
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

        if (array_key_exists("RemoteDiskIds",$param) and $param["RemoteDiskIds"] !== null) {
            $this->RemoteDiskIds = $param["RemoteDiskIds"];
        }

        if (array_key_exists("ForceDetach",$param) and $param["ForceDetach"] !== null) {
            $this->ForceDetach = $param["ForceDetach"];
        }
    }
}
