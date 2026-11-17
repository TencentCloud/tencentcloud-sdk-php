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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据迁移限速配置对象
 *
 * @method integer getDumpThread() 获取<p>全量导出线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method void setDumpThread(integer $DumpThread) 设置<p>全量导出线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method integer getDumpRps() 获取<p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000。支持mysql系相关链路、mongodb链路。</p>
 * @method void setDumpRps(integer $DumpRps) 设置<p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000。支持mysql系相关链路、mongodb链路。</p>
 * @method integer getLoadThread() 获取<p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method void setLoadThread(integer $LoadThread) 设置<p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method integer getLoadRps() 获取<p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method void setLoadRps(integer $LoadRps) 设置<p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method integer getSinkerThread() 获取<p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
 * @method void setSinkerThread(integer $SinkerThread) 设置<p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
 * @method integer getLoadBps() 获取<p>全量导入Bps（暂时只有redis产品生效），单位MB/s</p>
 * @method void setLoadBps(integer $LoadBps) 设置<p>全量导入Bps（暂时只有redis产品生效），单位MB/s</p>
 * @method integer getDstShardCount() 获取<p>目标库分片数，目前暂时只有redis用</p>
 * @method void setDstShardCount(integer $DstShardCount) 设置<p>目标库分片数，目前暂时只有redis用</p>
 * @method integer getDumpBps() 获取<p>全量导出Bps（pg链路及MongoDB链路使用。MongoDB上限80），单位MB/s</p>
 * @method void setDumpBps(integer $DumpBps) 设置<p>全量导出Bps（pg链路及MongoDB链路使用。MongoDB上限80），单位MB/s</p>
 * @method integer getSinkerRps() 获取<p>增量导入RPS限制，MongoDB专用。上限30000</p>
 * @method void setSinkerRps(integer $SinkerRps) 设置<p>增量导入RPS限制，MongoDB专用。上限30000</p>
 * @method integer getSinkerBps() 获取<p>增量导入BPS限制，单位MB/s，MongoDB专用。上限120</p>
 * @method void setSinkerBps(integer $SinkerBps) 设置<p>增量导入BPS限制，单位MB/s，MongoDB专用。上限120</p>
 */
class RateLimit extends AbstractModel
{
    /**
     * @var integer <p>全量导出线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     */
    public $DumpThread;

    /**
     * @var integer <p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000。支持mysql系相关链路、mongodb链路。</p>
     */
    public $DumpRps;

    /**
     * @var integer <p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     */
    public $LoadThread;

    /**
     * @var integer <p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     */
    public $LoadRps;

    /**
     * @var integer <p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
     */
    public $SinkerThread;

    /**
     * @var integer <p>全量导入Bps（暂时只有redis产品生效），单位MB/s</p>
     */
    public $LoadBps;

    /**
     * @var integer <p>目标库分片数，目前暂时只有redis用</p>
     */
    public $DstShardCount;

    /**
     * @var integer <p>全量导出Bps（pg链路及MongoDB链路使用。MongoDB上限80），单位MB/s</p>
     */
    public $DumpBps;

    /**
     * @var integer <p>增量导入RPS限制，MongoDB专用。上限30000</p>
     */
    public $SinkerRps;

    /**
     * @var integer <p>增量导入BPS限制，单位MB/s，MongoDB专用。上限120</p>
     */
    public $SinkerBps;

    /**
     * @param integer $DumpThread <p>全量导出线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     * @param integer $DumpRps <p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000。支持mysql系相关链路、mongodb链路。</p>
     * @param integer $LoadThread <p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     * @param integer $LoadRps <p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     * @param integer $SinkerThread <p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
     * @param integer $LoadBps <p>全量导入Bps（暂时只有redis产品生效），单位MB/s</p>
     * @param integer $DstShardCount <p>目标库分片数，目前暂时只有redis用</p>
     * @param integer $DumpBps <p>全量导出Bps（pg链路及MongoDB链路使用。MongoDB上限80），单位MB/s</p>
     * @param integer $SinkerRps <p>增量导入RPS限制，MongoDB专用。上限30000</p>
     * @param integer $SinkerBps <p>增量导入BPS限制，单位MB/s，MongoDB专用。上限120</p>
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
        if (array_key_exists("DumpThread",$param) and $param["DumpThread"] !== null) {
            $this->DumpThread = $param["DumpThread"];
        }

        if (array_key_exists("DumpRps",$param) and $param["DumpRps"] !== null) {
            $this->DumpRps = $param["DumpRps"];
        }

        if (array_key_exists("LoadThread",$param) and $param["LoadThread"] !== null) {
            $this->LoadThread = $param["LoadThread"];
        }

        if (array_key_exists("LoadRps",$param) and $param["LoadRps"] !== null) {
            $this->LoadRps = $param["LoadRps"];
        }

        if (array_key_exists("SinkerThread",$param) and $param["SinkerThread"] !== null) {
            $this->SinkerThread = $param["SinkerThread"];
        }

        if (array_key_exists("LoadBps",$param) and $param["LoadBps"] !== null) {
            $this->LoadBps = $param["LoadBps"];
        }

        if (array_key_exists("DstShardCount",$param) and $param["DstShardCount"] !== null) {
            $this->DstShardCount = $param["DstShardCount"];
        }

        if (array_key_exists("DumpBps",$param) and $param["DumpBps"] !== null) {
            $this->DumpBps = $param["DumpBps"];
        }

        if (array_key_exists("SinkerRps",$param) and $param["SinkerRps"] !== null) {
            $this->SinkerRps = $param["SinkerRps"];
        }

        if (array_key_exists("SinkerBps",$param) and $param["SinkerBps"] !== null) {
            $this->SinkerBps = $param["SinkerBps"];
        }
    }
}
