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
     * @param array $RemoteDiskIds <p>一个或多个待操作的单副本SSD硬盘ID。如果传入多个单副本SSD硬盘ID，只支持所有硬盘修改为同一属性。</p>
     * @param string $DiskName <p>新的单副本SSD硬盘名称</p>
     * @param integer $ProjectId <p>新的单副本SSD硬盘项目ID。</p>
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
    }
}
