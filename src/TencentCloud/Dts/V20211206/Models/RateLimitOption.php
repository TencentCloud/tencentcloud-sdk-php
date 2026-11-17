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
 * 迁移和同步任务限速的详细信息
 *
 * @method integer getCurrentDumpThread() 获取<p>当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method void setCurrentDumpThread(integer $CurrentDumpThread) 设置<p>当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method integer getDefaultDumpThread() 获取<p>默认的全量导出线程数，该字段仅在出参有意义</p>
 * @method void setDefaultDumpThread(integer $DefaultDumpThread) 设置<p>默认的全量导出线程数，该字段仅在出参有意义</p>
 * @method integer getCurrentDumpRps() 获取<p>当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method void setCurrentDumpRps(integer $CurrentDumpRps) 设置<p>当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method integer getDefaultDumpRps() 获取<p>默认的全量导出Rps，该字段仅在出参有意义</p>
 * @method void setDefaultDumpRps(integer $DefaultDumpRps) 设置<p>默认的全量导出Rps，该字段仅在出参有意义</p>
 * @method integer getCurrentLoadThread() 获取<p>当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method void setCurrentLoadThread(integer $CurrentLoadThread) 设置<p>当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method integer getDefaultLoadThread() 获取<p>默认的全量导入线程数，该字段仅在出参有意义</p>
 * @method void setDefaultLoadThread(integer $DefaultLoadThread) 设置<p>默认的全量导入线程数，该字段仅在出参有意义</p>
 * @method integer getCurrentLoadRps() 获取<p>当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method void setCurrentLoadRps(integer $CurrentLoadRps) 设置<p>当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method integer getDefaultLoadRps() 获取<p>默认的全量导入Rps，该字段仅在出参有意义</p>
 * @method void setDefaultLoadRps(integer $DefaultLoadRps) 设置<p>默认的全量导入Rps，该字段仅在出参有意义</p>
 * @method integer getCurrentSinkerThread() 获取<p>当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128</p>
 * @method void setCurrentSinkerThread(integer $CurrentSinkerThread) 设置<p>当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128</p>
 * @method integer getDefaultSinkerThread() 获取<p>默认的增量导入线程数，该字段仅在出参有意义</p>
 * @method void setDefaultSinkerThread(integer $DefaultSinkerThread) 设置<p>默认的增量导入线程数，该字段仅在出参有意义</p>
 * @method string getHasUserSetRateLimit() 获取<p>enum:&quot;no&quot;/&quot;yes&quot;、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义</p>
 * @method void setHasUserSetRateLimit(string $HasUserSetRateLimit) 设置<p>enum:&quot;no&quot;/&quot;yes&quot;、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义</p>
 * @method integer getDefaultDumpBps() 获取<p>默认的全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method void setDefaultDumpBps(integer $DefaultDumpBps) 设置<p>默认的全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method integer getCurrentSinkerRps() 获取<p>增量导入RPS，目前仅支持mongodb链路</p>
 * @method void setCurrentSinkerRps(integer $CurrentSinkerRps) 设置<p>增量导入RPS，目前仅支持mongodb链路</p>
 * @method integer getDefaultSinkerRps() 获取<p>默认的增量导入RPS，目前仅支持mongodb链路</p>
 * @method void setDefaultSinkerRps(integer $DefaultSinkerRps) 设置<p>默认的增量导入RPS，目前仅支持mongodb链路</p>
 * @method integer getCurrentLoadBps() 获取<p>当前导入BPS，暂时只有redis在用，单位MB/s</p>
 * @method void setCurrentLoadBps(integer $CurrentLoadBps) 设置<p>当前导入BPS，暂时只有redis在用，单位MB/s</p>
 * @method integer getCurrentDstShardCount() 获取<p>目标库分片数，暂时只有redis在用</p>
 * @method void setCurrentDstShardCount(integer $CurrentDstShardCount) 设置<p>目标库分片数，暂时只有redis在用</p>
 * @method integer getCurrentDumpBps() 获取<p>全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method void setCurrentDumpBps(integer $CurrentDumpBps) 设置<p>全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method integer getCurrentSinkerBps() 获取<p>增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method void setCurrentSinkerBps(integer $CurrentSinkerBps) 设置<p>增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method integer getDefaultSinkerBps() 获取<p>默认的增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
 * @method void setDefaultSinkerBps(integer $DefaultSinkerBps) 设置<p>默认的增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
 */
class RateLimitOption extends AbstractModel
{
    /**
     * @var integer <p>当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
     */
    public $CurrentDumpThread;

    /**
     * @var integer <p>默认的全量导出线程数，该字段仅在出参有意义</p>
     */
    public $DefaultDumpThread;

    /**
     * @var integer <p>当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     */
    public $CurrentDumpRps;

    /**
     * @var integer <p>默认的全量导出Rps，该字段仅在出参有意义</p>
     */
    public $DefaultDumpRps;

    /**
     * @var integer <p>当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
     */
    public $CurrentLoadThread;

    /**
     * @var integer <p>默认的全量导入线程数，该字段仅在出参有意义</p>
     */
    public $DefaultLoadThread;

    /**
     * @var integer <p>当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     */
    public $CurrentLoadRps;

    /**
     * @var integer <p>默认的全量导入Rps，该字段仅在出参有意义</p>
     */
    public $DefaultLoadRps;

    /**
     * @var integer <p>当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128</p>
     */
    public $CurrentSinkerThread;

    /**
     * @var integer <p>默认的增量导入线程数，该字段仅在出参有意义</p>
     */
    public $DefaultSinkerThread;

    /**
     * @var string <p>enum:&quot;no&quot;/&quot;yes&quot;、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义</p>
     */
    public $HasUserSetRateLimit;

    /**
     * @var integer <p>默认的全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
     */
    public $DefaultDumpBps;

    /**
     * @var integer <p>增量导入RPS，目前仅支持mongodb链路</p>
     */
    public $CurrentSinkerRps;

    /**
     * @var integer <p>默认的增量导入RPS，目前仅支持mongodb链路</p>
     */
    public $DefaultSinkerRps;

    /**
     * @var integer <p>当前导入BPS，暂时只有redis在用，单位MB/s</p>
     */
    public $CurrentLoadBps;

    /**
     * @var integer <p>目标库分片数，暂时只有redis在用</p>
     */
    public $CurrentDstShardCount;

    /**
     * @var integer <p>全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
     */
    public $CurrentDumpBps;

    /**
     * @var integer <p>增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
     */
    public $CurrentSinkerBps;

    /**
     * @var integer <p>默认的增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
     */
    public $DefaultSinkerBps;

    /**
     * @param integer $CurrentDumpThread <p>当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
     * @param integer $DefaultDumpThread <p>默认的全量导出线程数，该字段仅在出参有意义</p>
     * @param integer $CurrentDumpRps <p>当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     * @param integer $DefaultDumpRps <p>默认的全量导出Rps，该字段仅在出参有意义</p>
     * @param integer $CurrentLoadThread <p>当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16</p>
     * @param integer $DefaultLoadThread <p>默认的全量导入线程数，该字段仅在出参有意义</p>
     * @param integer $CurrentLoadRps <p>当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     * @param integer $DefaultLoadRps <p>默认的全量导入Rps，该字段仅在出参有意义</p>
     * @param integer $CurrentSinkerThread <p>当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128</p>
     * @param integer $DefaultSinkerThread <p>默认的增量导入线程数，该字段仅在出参有意义</p>
     * @param string $HasUserSetRateLimit <p>enum:&quot;no&quot;/&quot;yes&quot;、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义</p>
     * @param integer $DefaultDumpBps <p>默认的全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
     * @param integer $CurrentSinkerRps <p>增量导入RPS，目前仅支持mongodb链路</p>
     * @param integer $DefaultSinkerRps <p>默认的增量导入RPS，目前仅支持mongodb链路</p>
     * @param integer $CurrentLoadBps <p>当前导入BPS，暂时只有redis在用，单位MB/s</p>
     * @param integer $CurrentDstShardCount <p>目标库分片数，暂时只有redis在用</p>
     * @param integer $CurrentDumpBps <p>全量导出BPS，目前仅支持mongodb链路，单位MB/s</p>
     * @param integer $CurrentSinkerBps <p>增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
     * @param integer $DefaultSinkerBps <p>默认的增量导入BPS，目前仅支持mongodb链路，单位MB/s</p>
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
        if (array_key_exists("CurrentDumpThread",$param) and $param["CurrentDumpThread"] !== null) {
            $this->CurrentDumpThread = $param["CurrentDumpThread"];
        }

        if (array_key_exists("DefaultDumpThread",$param) and $param["DefaultDumpThread"] !== null) {
            $this->DefaultDumpThread = $param["DefaultDumpThread"];
        }

        if (array_key_exists("CurrentDumpRps",$param) and $param["CurrentDumpRps"] !== null) {
            $this->CurrentDumpRps = $param["CurrentDumpRps"];
        }

        if (array_key_exists("DefaultDumpRps",$param) and $param["DefaultDumpRps"] !== null) {
            $this->DefaultDumpRps = $param["DefaultDumpRps"];
        }

        if (array_key_exists("CurrentLoadThread",$param) and $param["CurrentLoadThread"] !== null) {
            $this->CurrentLoadThread = $param["CurrentLoadThread"];
        }

        if (array_key_exists("DefaultLoadThread",$param) and $param["DefaultLoadThread"] !== null) {
            $this->DefaultLoadThread = $param["DefaultLoadThread"];
        }

        if (array_key_exists("CurrentLoadRps",$param) and $param["CurrentLoadRps"] !== null) {
            $this->CurrentLoadRps = $param["CurrentLoadRps"];
        }

        if (array_key_exists("DefaultLoadRps",$param) and $param["DefaultLoadRps"] !== null) {
            $this->DefaultLoadRps = $param["DefaultLoadRps"];
        }

        if (array_key_exists("CurrentSinkerThread",$param) and $param["CurrentSinkerThread"] !== null) {
            $this->CurrentSinkerThread = $param["CurrentSinkerThread"];
        }

        if (array_key_exists("DefaultSinkerThread",$param) and $param["DefaultSinkerThread"] !== null) {
            $this->DefaultSinkerThread = $param["DefaultSinkerThread"];
        }

        if (array_key_exists("HasUserSetRateLimit",$param) and $param["HasUserSetRateLimit"] !== null) {
            $this->HasUserSetRateLimit = $param["HasUserSetRateLimit"];
        }

        if (array_key_exists("DefaultDumpBps",$param) and $param["DefaultDumpBps"] !== null) {
            $this->DefaultDumpBps = $param["DefaultDumpBps"];
        }

        if (array_key_exists("CurrentSinkerRps",$param) and $param["CurrentSinkerRps"] !== null) {
            $this->CurrentSinkerRps = $param["CurrentSinkerRps"];
        }

        if (array_key_exists("DefaultSinkerRps",$param) and $param["DefaultSinkerRps"] !== null) {
            $this->DefaultSinkerRps = $param["DefaultSinkerRps"];
        }

        if (array_key_exists("CurrentLoadBps",$param) and $param["CurrentLoadBps"] !== null) {
            $this->CurrentLoadBps = $param["CurrentLoadBps"];
        }

        if (array_key_exists("CurrentDstShardCount",$param) and $param["CurrentDstShardCount"] !== null) {
            $this->CurrentDstShardCount = $param["CurrentDstShardCount"];
        }

        if (array_key_exists("CurrentDumpBps",$param) and $param["CurrentDumpBps"] !== null) {
            $this->CurrentDumpBps = $param["CurrentDumpBps"];
        }

        if (array_key_exists("CurrentSinkerBps",$param) and $param["CurrentSinkerBps"] !== null) {
            $this->CurrentSinkerBps = $param["CurrentSinkerBps"];
        }

        if (array_key_exists("DefaultSinkerBps",$param) and $param["DefaultSinkerBps"] !== null) {
            $this->DefaultSinkerBps = $param["DefaultSinkerBps"];
        }
    }
}
