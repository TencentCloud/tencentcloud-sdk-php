<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSnapshotName() 获取制作的快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置制作的快照名称
 * @method string getSnapshotDescription() 获取制作的快照描述
 * @method void setSnapshotDescription(string $SnapshotDescription) 设置制作的快照描述
 * @method string getSnapshotUrl() 获取数据盘镜像COS链接
 * @method void setSnapshotUrl(string $SnapshotUrl) 设置数据盘镜像COS链接
 * @method integer getSnapshotSize() 获取制作的快照大小
 * @method void setSnapshotSize(integer $SnapshotSize) 设置制作的快照大小
 * @method boolean getDryRun() 获取true为仅检查参数，默认为false
 * @method void setDryRun(boolean $DryRun) 设置true为仅检查参数，默认为false
 */

/**
 *ImportSnapshot请求参数结构体
 */
class ImportSnapshotRequest extends AbstractModel
{
    /**
     * @var string 制作的快照名称
     */
    public $SnapshotName;

    /**
     * @var string 制作的快照描述
     */
    public $SnapshotDescription;

    /**
     * @var string 数据盘镜像COS链接
     */
    public $SnapshotUrl;

    /**
     * @var integer 制作的快照大小
     */
    public $SnapshotSize;

    /**
     * @var boolean true为仅检查参数，默认为false
     */
    public $DryRun;
    /**
     * @param string $SnapshotName 制作的快照名称
     * @param string $SnapshotDescription 制作的快照描述
     * @param string $SnapshotUrl 数据盘镜像COS链接
     * @param integer $SnapshotSize 制作的快照大小
     * @param boolean $DryRun true为仅检查参数，默认为false
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotDescription",$param) and $param["SnapshotDescription"] !== null) {
            $this->SnapshotDescription = $param["SnapshotDescription"];
        }

        if (array_key_exists("SnapshotUrl",$param) and $param["SnapshotUrl"] !== null) {
            $this->SnapshotUrl = $param["SnapshotUrl"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
