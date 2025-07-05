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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFileSystemBandwidthLimit请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID,可通过[DescribeCfsFileSystems](https://cloud.tencent.com/document/api/582/38170)接口获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID,可通过[DescribeCfsFileSystems](https://cloud.tencent.com/document/api/582/38170)接口获取
 * @method integer getBandwidthLimit() 获取文件系统带宽，仅吞吐型可填。单位MiB/s，最小为1GiB/s，最大200GiB/s。
 * @method void setBandwidthLimit(integer $BandwidthLimit) 设置文件系统带宽，仅吞吐型可填。单位MiB/s，最小为1GiB/s，最大200GiB/s。
 */
class UpdateFileSystemBandwidthLimitRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID,可通过[DescribeCfsFileSystems](https://cloud.tencent.com/document/api/582/38170)接口获取
     */
    public $FileSystemId;

    /**
     * @var integer 文件系统带宽，仅吞吐型可填。单位MiB/s，最小为1GiB/s，最大200GiB/s。
     */
    public $BandwidthLimit;

    /**
     * @param string $FileSystemId 文件系统 ID,可通过[DescribeCfsFileSystems](https://cloud.tencent.com/document/api/582/38170)接口获取
     * @param integer $BandwidthLimit 文件系统带宽，仅吞吐型可填。单位MiB/s，最小为1GiB/s，最大200GiB/s。
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }
    }
}
