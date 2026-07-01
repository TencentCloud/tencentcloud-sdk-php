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
 * @method integer getDumpRps() 获取<p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method void setDumpRps(integer $DumpRps) 设置<p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method integer getLoadThread() 获取<p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method void setLoadThread(integer $LoadThread) 设置<p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
 * @method integer getLoadRps() 获取<p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method void setLoadRps(integer $LoadRps) 设置<p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
 * @method integer getSinkerThread() 获取<p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
 * @method void setSinkerThread(integer $SinkerThread) 设置<p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
 */
class RateLimit extends AbstractModel
{
    /**
     * @var integer <p>全量导出线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     */
    public $DumpThread;

    /**
     * @var integer <p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
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
     * @param integer $DumpThread <p>全量导出线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     * @param integer $DumpRps <p>全量导出Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     * @param integer $LoadThread <p>全量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为16</p>
     * @param integer $LoadRps <p>全量导入Rps，如果不设置或设置为0则表示保持当前值，最大值为50000000</p>
     * @param integer $SinkerThread <p>增量导入线程数，如果不设置或设置为0则表示保持当前值，最大值为128</p>
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
    }
}
