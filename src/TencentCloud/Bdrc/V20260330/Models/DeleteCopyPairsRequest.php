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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCopyPairs请求参数结构体
 *
 * @method array getCopyPairIds() 获取要删除的复制对ID列表（长度 1~10）
 * @method void setCopyPairIds(array $CopyPairIds) 设置要删除的复制对ID列表（长度 1~10）
 * @method string getCopyPairType() 获取要删除复制对的类型，可选值：DISK、INSTANCE、CFS
 * @method void setCopyPairType(string $CopyPairType) 设置要删除复制对的类型，可选值：DISK、INSTANCE、CFS
 * @method boolean getDeleteTargetResource() 获取是否一并删除容灾站点云盘，默认 true（容灾盘数据可能处于中间状态，保留也无法正常使用）
 * @method void setDeleteTargetResource(boolean $DeleteTargetResource) 设置是否一并删除容灾站点云盘，默认 true（容灾盘数据可能处于中间状态，保留也无法正常使用）
 */
class DeleteCopyPairsRequest extends AbstractModel
{
    /**
     * @var array 要删除的复制对ID列表（长度 1~10）
     */
    public $CopyPairIds;

    /**
     * @var string 要删除复制对的类型，可选值：DISK、INSTANCE、CFS
     */
    public $CopyPairType;

    /**
     * @var boolean 是否一并删除容灾站点云盘，默认 true（容灾盘数据可能处于中间状态，保留也无法正常使用）
     */
    public $DeleteTargetResource;

    /**
     * @param array $CopyPairIds 要删除的复制对ID列表（长度 1~10）
     * @param string $CopyPairType 要删除复制对的类型，可选值：DISK、INSTANCE、CFS
     * @param boolean $DeleteTargetResource 是否一并删除容灾站点云盘，默认 true（容灾盘数据可能处于中间状态，保留也无法正常使用）
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
        if (array_key_exists("CopyPairIds",$param) and $param["CopyPairIds"] !== null) {
            $this->CopyPairIds = $param["CopyPairIds"];
        }

        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }

        if (array_key_exists("DeleteTargetResource",$param) and $param["DeleteTargetResource"] !== null) {
            $this->DeleteTargetResource = $param["DeleteTargetResource"];
        }
    }
}
