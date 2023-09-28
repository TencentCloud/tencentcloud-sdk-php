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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 滚动更新设置。
 *
 * @method integer getBatchNumber() 获取批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
 * @method void setBatchNumber(integer $BatchNumber) 设置批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
 * @method string getBatchPause() 获取批次间暂停策略。默认值为 Automatic，取值范围如下：<br><li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li><li>BATCH_INTERVAL_PAUSE：批次间暂停</li><li>AUTOMATIC：不暂停
 * @method void setBatchPause(string $BatchPause) 设置批次间暂停策略。默认值为 Automatic，取值范围如下：<br><li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li><li>BATCH_INTERVAL_PAUSE：批次间暂停</li><li>AUTOMATIC：不暂停
 */
class RollingUpdateSettings extends AbstractModel
{
    /**
     * @var integer 批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
     */
    public $BatchNumber;

    /**
     * @var string 批次间暂停策略。默认值为 Automatic，取值范围如下：<br><li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li><li>BATCH_INTERVAL_PAUSE：批次间暂停</li><li>AUTOMATIC：不暂停
     */
    public $BatchPause;

    /**
     * @param integer $BatchNumber 批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
     * @param string $BatchPause 批次间暂停策略。默认值为 Automatic，取值范围如下：<br><li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li><li>BATCH_INTERVAL_PAUSE：批次间暂停</li><li>AUTOMATIC：不暂停
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
        if (array_key_exists("BatchNumber",$param) and $param["BatchNumber"] !== null) {
            $this->BatchNumber = $param["BatchNumber"];
        }

        if (array_key_exists("BatchPause",$param) and $param["BatchPause"] !== null) {
            $this->BatchPause = $param["BatchPause"];
        }
    }
}
