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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档开关配置
 *
 * @method boolean getDownloadEnabled() 获取<p>是否可下载</p>
 * @method void setDownloadEnabled(boolean $DownloadEnabled) 设置<p>是否可下载</p>
 * @method boolean getReferEnabled() 获取<p>是否在参考来源中展示</p>
 * @method void setReferEnabled(boolean $ReferEnabled) 设置<p>是否在参考来源中展示</p>
 */
class DocSwitch extends AbstractModel
{
    /**
     * @var boolean <p>是否可下载</p>
     */
    public $DownloadEnabled;

    /**
     * @var boolean <p>是否在参考来源中展示</p>
     */
    public $ReferEnabled;

    /**
     * @param boolean $DownloadEnabled <p>是否可下载</p>
     * @param boolean $ReferEnabled <p>是否在参考来源中展示</p>
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
        if (array_key_exists("DownloadEnabled",$param) and $param["DownloadEnabled"] !== null) {
            $this->DownloadEnabled = $param["DownloadEnabled"];
        }

        if (array_key_exists("ReferEnabled",$param) and $param["ReferEnabled"] !== null) {
            $this->ReferEnabled = $param["ReferEnabled"];
        }
    }
}
