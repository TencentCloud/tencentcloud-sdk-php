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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线性组装output信息。
 *
 * @method string getType() 获取HLS DASH。
 * @method void setType(string $Type) 设置HLS DASH。
 * @method string getGroupName() 获取output group名称，可以和source的group名称对应关联起来。
 * @method void setGroupName(string $GroupName) 设置output group名称，可以和source的group名称对应关联起来。
 * @method string getManifestName() 获取channel program调度后输出的文件名。
 * @method void setManifestName(string $ManifestName) 设置channel program调度后输出的文件名。
 * @method ManifestInfo getManifestConf() 获取Type为HLS时manifest配置使用的字段。
 * @method void setManifestConf(ManifestInfo $ManifestConf) 设置Type为HLS时manifest配置使用的字段。
 * @method string getPlaybackURL() 获取播放地址。
 * @method void setPlaybackURL(string $PlaybackURL) 设置播放地址。
 * @method DashManifestInfo getDashManifestConf() 获取Type为DASH时manifest配置使用的字段。
 * @method void setDashManifestConf(DashManifestInfo $DashManifestConf) 设置Type为DASH时manifest配置使用的字段。
 */
class OutputInfo extends AbstractModel
{
    /**
     * @var string HLS DASH。
     */
    public $Type;

    /**
     * @var string output group名称，可以和source的group名称对应关联起来。
     */
    public $GroupName;

    /**
     * @var string channel program调度后输出的文件名。
     */
    public $ManifestName;

    /**
     * @var ManifestInfo Type为HLS时manifest配置使用的字段。
     */
    public $ManifestConf;

    /**
     * @var string 播放地址。
     */
    public $PlaybackURL;

    /**
     * @var DashManifestInfo Type为DASH时manifest配置使用的字段。
     */
    public $DashManifestConf;

    /**
     * @param string $Type HLS DASH。
     * @param string $GroupName output group名称，可以和source的group名称对应关联起来。
     * @param string $ManifestName channel program调度后输出的文件名。
     * @param ManifestInfo $ManifestConf Type为HLS时manifest配置使用的字段。
     * @param string $PlaybackURL 播放地址。
     * @param DashManifestInfo $DashManifestConf Type为DASH时manifest配置使用的字段。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ManifestName",$param) and $param["ManifestName"] !== null) {
            $this->ManifestName = $param["ManifestName"];
        }

        if (array_key_exists("ManifestConf",$param) and $param["ManifestConf"] !== null) {
            $this->ManifestConf = new ManifestInfo();
            $this->ManifestConf->deserialize($param["ManifestConf"]);
        }

        if (array_key_exists("PlaybackURL",$param) and $param["PlaybackURL"] !== null) {
            $this->PlaybackURL = $param["PlaybackURL"];
        }

        if (array_key_exists("DashManifestConf",$param) and $param["DashManifestConf"] !== null) {
            $this->DashManifestConf = new DashManifestInfo();
            $this->DashManifestConf->deserialize($param["DashManifestConf"]);
        }
    }
}
