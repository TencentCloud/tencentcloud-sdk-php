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
 * 概览封禁列表配额详情
 *
 * @method integer getTotalCnt() 获取<p>封禁列表总配额数量。</p>
 * @method void setTotalCnt(integer $TotalCnt) 设置<p>封禁列表总配额数量。</p>
 * @method integer getUsedCnt() 获取<p>封禁列表已使用数量。</p>
 * @method void setUsedCnt(integer $UsedCnt) 设置<p>封禁列表已使用数量。</p>
 * @method integer getRemainCnt() 获取<p>封禁列表剩余配额数量。</p>
 * @method void setRemainCnt(integer $RemainCnt) 设置<p>封禁列表剩余配额数量。</p>
 * @method integer getBaseTotalCnt() 获取<p>基础配额总数量。</p>
 * @method void setBaseTotalCnt(integer $BaseTotalCnt) 设置<p>基础配额总数量。</p>
 * @method integer getBaseUsedCnt() 获取<p>基础配额已使用数量。</p>
 * @method void setBaseUsedCnt(integer $BaseUsedCnt) 设置<p>基础配额已使用数量。</p>
 * @method integer getBaseRemainCnt() 获取<p>基础配额剩余数量。</p>
 * @method void setBaseRemainCnt(integer $BaseRemainCnt) 设置<p>基础配额剩余数量。</p>
 * @method integer getExtensionTotalCnt() 获取<p>扩容配额总数量。</p>
 * @method void setExtensionTotalCnt(integer $ExtensionTotalCnt) 设置<p>扩容配额总数量。</p>
 * @method integer getExtensionUsedCnt() 获取<p>扩容配额已使用数量。</p>
 * @method void setExtensionUsedCnt(integer $ExtensionUsedCnt) 设置<p>扩容配额已使用数量。</p>
 * @method integer getExtensionRemainCnt() 获取<p>扩容配额剩余数量。</p>
 * @method void setExtensionRemainCnt(integer $ExtensionRemainCnt) 设置<p>扩容配额剩余数量。</p>
 */
class OverviewBlockListQuotaDetail extends AbstractModel
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
     * @var integer <p>封禁列表剩余配额数量。</p>
     */
    public $RemainCnt;

    /**
     * @var integer <p>基础配额总数量。</p>
     */
    public $BaseTotalCnt;

    /**
     * @var integer <p>基础配额已使用数量。</p>
     */
    public $BaseUsedCnt;

    /**
     * @var integer <p>基础配额剩余数量。</p>
     */
    public $BaseRemainCnt;

    /**
     * @var integer <p>扩容配额总数量。</p>
     */
    public $ExtensionTotalCnt;

    /**
     * @var integer <p>扩容配额已使用数量。</p>
     */
    public $ExtensionUsedCnt;

    /**
     * @var integer <p>扩容配额剩余数量。</p>
     */
    public $ExtensionRemainCnt;

    /**
     * @param integer $TotalCnt <p>封禁列表总配额数量。</p>
     * @param integer $UsedCnt <p>封禁列表已使用数量。</p>
     * @param integer $RemainCnt <p>封禁列表剩余配额数量。</p>
     * @param integer $BaseTotalCnt <p>基础配额总数量。</p>
     * @param integer $BaseUsedCnt <p>基础配额已使用数量。</p>
     * @param integer $BaseRemainCnt <p>基础配额剩余数量。</p>
     * @param integer $ExtensionTotalCnt <p>扩容配额总数量。</p>
     * @param integer $ExtensionUsedCnt <p>扩容配额已使用数量。</p>
     * @param integer $ExtensionRemainCnt <p>扩容配额剩余数量。</p>
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

        if (array_key_exists("RemainCnt",$param) and $param["RemainCnt"] !== null) {
            $this->RemainCnt = $param["RemainCnt"];
        }

        if (array_key_exists("BaseTotalCnt",$param) and $param["BaseTotalCnt"] !== null) {
            $this->BaseTotalCnt = $param["BaseTotalCnt"];
        }

        if (array_key_exists("BaseUsedCnt",$param) and $param["BaseUsedCnt"] !== null) {
            $this->BaseUsedCnt = $param["BaseUsedCnt"];
        }

        if (array_key_exists("BaseRemainCnt",$param) and $param["BaseRemainCnt"] !== null) {
            $this->BaseRemainCnt = $param["BaseRemainCnt"];
        }

        if (array_key_exists("ExtensionTotalCnt",$param) and $param["ExtensionTotalCnt"] !== null) {
            $this->ExtensionTotalCnt = $param["ExtensionTotalCnt"];
        }

        if (array_key_exists("ExtensionUsedCnt",$param) and $param["ExtensionUsedCnt"] !== null) {
            $this->ExtensionUsedCnt = $param["ExtensionUsedCnt"];
        }

        if (array_key_exists("ExtensionRemainCnt",$param) and $param["ExtensionRemainCnt"] !== null) {
            $this->ExtensionRemainCnt = $param["ExtensionRemainCnt"];
        }
    }
}
