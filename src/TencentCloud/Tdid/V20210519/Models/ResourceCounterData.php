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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源计数统计数据
 *
 * @method integer getDidCnt() 获取DID总数
 * @method void setDidCnt(integer $DidCnt) 设置DID总数
 * @method integer getVCCnt() 获取VC总数
 * @method void setVCCnt(integer $VCCnt) 设置VC总数
 * @method integer getCPTCnt() 获取CPT总数
 * @method void setCPTCnt(integer $CPTCnt) 设置CPT总数
 * @method integer getVerifyCnt() 获取 VC验证总数 
 * @method void setVerifyCnt(integer $VerifyCnt) 设置 VC验证总数 
 * @method integer getAuthCnt() 获取权威机构数量
 * @method void setAuthCnt(integer $AuthCnt) 设置权威机构数量
 */
class ResourceCounterData extends AbstractModel
{
    /**
     * @var integer DID总数
     */
    public $DidCnt;

    /**
     * @var integer VC总数
     */
    public $VCCnt;

    /**
     * @var integer CPT总数
     */
    public $CPTCnt;

    /**
     * @var integer  VC验证总数 
     */
    public $VerifyCnt;

    /**
     * @var integer 权威机构数量
     */
    public $AuthCnt;

    /**
     * @param integer $DidCnt DID总数
     * @param integer $VCCnt VC总数
     * @param integer $CPTCnt CPT总数
     * @param integer $VerifyCnt  VC验证总数 
     * @param integer $AuthCnt 权威机构数量
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
        if (array_key_exists("DidCnt",$param) and $param["DidCnt"] !== null) {
            $this->DidCnt = $param["DidCnt"];
        }

        if (array_key_exists("VCCnt",$param) and $param["VCCnt"] !== null) {
            $this->VCCnt = $param["VCCnt"];
        }

        if (array_key_exists("CPTCnt",$param) and $param["CPTCnt"] !== null) {
            $this->CPTCnt = $param["CPTCnt"];
        }

        if (array_key_exists("VerifyCnt",$param) and $param["VerifyCnt"] !== null) {
            $this->VerifyCnt = $param["VerifyCnt"];
        }

        if (array_key_exists("AuthCnt",$param) and $param["AuthCnt"] !== null) {
            $this->AuthCnt = $param["AuthCnt"];
        }
    }
}
