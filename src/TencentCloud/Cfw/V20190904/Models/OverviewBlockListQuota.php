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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览封禁列表配额
 *
 * @method integer getTotalCnt() 获取<p>封禁列表总配额数量。</p>
 * @method void setTotalCnt(integer $TotalCnt) 设置<p>封禁列表总配额数量。</p>
 * @method integer getUsedCnt() 获取<p>封禁列表已使用数量。</p>
 * @method void setUsedCnt(integer $UsedCnt) 设置<p>封禁列表已使用数量。</p>
 * @method integer getInUsedCnt() 获取<p>入站方向已使用的封禁列表记录。</p>
 * @method void setInUsedCnt(integer $InUsedCnt) 设置<p>入站方向已使用的封禁列表记录。</p>
 * @method integer getOutUsedCnt() 获取<p>出方向封禁列表已使用数量。</p>
 * @method void setOutUsedCnt(integer $OutUsedCnt) 设置<p>出方向封禁列表已使用数量。</p>
 */
class OverviewBlockListQuota extends AbstractModel
{
    /**
     * @var integer <p>封禁列表总配额数量。</p>
     */
    public $TotalCnt;

    /**
     * @var integer <p>封禁列表已使用数量。</p>
     */
    public $UsedCnt;

    /**
     * @var integer <p>入站方向已使用的封禁列表记录。</p>
     */
    public $InUsedCnt;

    /**
     * @var integer <p>出方向封禁列表已使用数量。</p>
     */
    public $OutUsedCnt;

    /**
     * @param integer $TotalCnt <p>封禁列表总配额数量。</p>
     * @param integer $UsedCnt <p>封禁列表已使用数量。</p>
     * @param integer $InUsedCnt <p>入站方向已使用的封禁列表记录。</p>
     * @param integer $OutUsedCnt <p>出方向封禁列表已使用数量。</p>
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("UsedCnt",$param) and $param["UsedCnt"] !== null) {
            $this->UsedCnt = $param["UsedCnt"];
        }

        if (array_key_exists("InUsedCnt",$param) and $param["InUsedCnt"] !== null) {
            $this->InUsedCnt = $param["InUsedCnt"];
        }

        if (array_key_exists("OutUsedCnt",$param) and $param["OutUsedCnt"] !== null) {
            $this->OutUsedCnt = $param["OutUsedCnt"];
        }
    }
}
