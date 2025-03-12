<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getCurrentDumpThread() 获取当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
 * @method void setCurrentDumpThread(integer $CurrentDumpThread) 设置当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
 * @method integer getDefaultDumpThread() 获取默认的全量导出线程数，该字段仅在出参有意义
 * @method void setDefaultDumpThread(integer $DefaultDumpThread) 设置默认的全量导出线程数，该字段仅在出参有意义
 * @method integer getCurrentDumpRps() 获取当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000
 * @method void setCurrentDumpRps(integer $CurrentDumpRps) 设置当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000
 * @method integer getDefaultDumpRps() 获取默认的全量导出Rps，该字段仅在出参有意义
 * @method void setDefaultDumpRps(integer $DefaultDumpRps) 设置默认的全量导出Rps，该字段仅在出参有意义
 * @method integer getCurrentLoadThread() 获取当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
 * @method void setCurrentLoadThread(integer $CurrentLoadThread) 设置当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
 * @method integer getDefaultLoadThread() 获取默认的全量导入线程数，该字段仅在出参有意义
 * @method void setDefaultLoadThread(integer $DefaultLoadThread) 设置默认的全量导入线程数，该字段仅在出参有意义
 * @method integer getCurrentLoadRps() 获取当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000	
 * @method void setCurrentLoadRps(integer $CurrentLoadRps) 设置当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000	
 * @method integer getDefaultLoadRps() 获取默认的全量导入Rps，该字段仅在出参有意义	
 * @method void setDefaultLoadRps(integer $DefaultLoadRps) 设置默认的全量导入Rps，该字段仅在出参有意义	
 * @method integer getCurrentSinkerThread() 获取当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128
 * @method void setCurrentSinkerThread(integer $CurrentSinkerThread) 设置当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128
 * @method integer getDefaultSinkerThread() 获取默认的增量导入线程数，该字段仅在出参有意义
 * @method void setDefaultSinkerThread(integer $DefaultSinkerThread) 设置默认的增量导入线程数，该字段仅在出参有意义
 * @method string getHasUserSetRateLimit() 获取enum:"no"/"yes"、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义
 * @method void setHasUserSetRateLimit(string $HasUserSetRateLimit) 设置enum:"no"/"yes"、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义
 */
class RateLimitOption extends AbstractModel
{
    /**
     * @var integer 当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
     */
    public $CurrentDumpThread;

    /**
     * @var integer 默认的全量导出线程数，该字段仅在出参有意义
     */
    public $DefaultDumpThread;

    /**
     * @var integer 当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000
     */
    public $CurrentDumpRps;

    /**
     * @var integer 默认的全量导出Rps，该字段仅在出参有意义
     */
    public $DefaultDumpRps;

    /**
     * @var integer 当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
     */
    public $CurrentLoadThread;

    /**
     * @var integer 默认的全量导入线程数，该字段仅在出参有意义
     */
    public $DefaultLoadThread;

    /**
     * @var integer 当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000	
     */
    public $CurrentLoadRps;

    /**
     * @var integer 默认的全量导入Rps，该字段仅在出参有意义	
     */
    public $DefaultLoadRps;

    /**
     * @var integer 当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128
     */
    public $CurrentSinkerThread;

    /**
     * @var integer 默认的增量导入线程数，该字段仅在出参有意义
     */
    public $DefaultSinkerThread;

    /**
     * @var string enum:"no"/"yes"、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义
     */
    public $HasUserSetRateLimit;

    /**
     * @param integer $CurrentDumpThread 当前生效的全量导出线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
     * @param integer $DefaultDumpThread 默认的全量导出线程数，该字段仅在出参有意义
     * @param integer $CurrentDumpRps 当前生效的全量导出Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000
     * @param integer $DefaultDumpRps 默认的全量导出Rps，该字段仅在出参有意义
     * @param integer $CurrentLoadThread 当前生效的全量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为16
     * @param integer $DefaultLoadThread 默认的全量导入线程数，该字段仅在出参有意义
     * @param integer $CurrentLoadRps 当前生效的全量导入Rps，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为50000000	
     * @param integer $DefaultLoadRps 默认的全量导入Rps，该字段仅在出参有意义	
     * @param integer $CurrentSinkerThread 当前生效的增量导入线程数，配置任务时可调整该字段值，注意：如果不设置或设置为0则表示保持当前值，最大值为128
     * @param integer $DefaultSinkerThread 默认的增量导入线程数，该字段仅在出参有意义
     * @param string $HasUserSetRateLimit enum:"no"/"yes"、no表示用户未设置过限速、yes表示设置过限速，该字段仅在出参有意义
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
    }
}
