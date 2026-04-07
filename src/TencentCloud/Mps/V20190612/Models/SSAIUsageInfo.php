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
 * SSAI用量信息
 *
 * @method integer getAdRequestSuccess() 获取广告请求成功次数
 * @method void setAdRequestSuccess(integer $AdRequestSuccess) 设置广告请求成功次数
 * @method integer getAdRequestFail() 获取广告请求失败次数
 * @method void setAdRequestFail(integer $AdRequestFail) 设置广告请求失败次数
 * @method integer getImpression() 获取曝光次数
 * @method void setImpression(integer $Impression) 设置曝光次数
 * @method float getMidFillRate() 获取中贴个性化广告填充率
 * @method void setMidFillRate(float $MidFillRate) 设置中贴个性化广告填充率
 * @method float getAdMarkerTime() 获取中贴广告标记时间
 * @method void setAdMarkerTime(float $AdMarkerTime) 设置中贴广告标记时间
 * @method float getReplacedTime() 获取中贴个性化替换时间
 * @method void setReplacedTime(float $ReplacedTime) 设置中贴个性化替换时间
 * @method float getPreReplaceRate() 获取前贴广告替换率
 * @method void setPreReplaceRate(float $PreReplaceRate) 设置前贴广告替换率
 * @method integer getPreReqNum() 获取前贴广告请求数
 * @method void setPreReqNum(integer $PreReqNum) 设置前贴广告请求数
 * @method integer getPreReplacedNum() 获取前贴广告替换数
 * @method void setPreReplacedNum(integer $PreReplacedNum) 设置前贴广告替换数
 * @method array getUsageDetails() 获取各广告配置用量详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageDetails(array $UsageDetails) 设置各广告配置用量详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class SSAIUsageInfo extends AbstractModel
{
    /**
     * @var integer 广告请求成功次数
     */
    public $AdRequestSuccess;

    /**
     * @var integer 广告请求失败次数
     */
    public $AdRequestFail;

    /**
     * @var integer 曝光次数
     */
    public $Impression;

    /**
     * @var float 中贴个性化广告填充率
     */
    public $MidFillRate;

    /**
     * @var float 中贴广告标记时间
     */
    public $AdMarkerTime;

    /**
     * @var float 中贴个性化替换时间
     */
    public $ReplacedTime;

    /**
     * @var float 前贴广告替换率
     */
    public $PreReplaceRate;

    /**
     * @var integer 前贴广告请求数
     */
    public $PreReqNum;

    /**
     * @var integer 前贴广告替换数
     */
    public $PreReplacedNum;

    /**
     * @var array 各广告配置用量详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageDetails;

    /**
     * @param integer $AdRequestSuccess 广告请求成功次数
     * @param integer $AdRequestFail 广告请求失败次数
     * @param integer $Impression 曝光次数
     * @param float $MidFillRate 中贴个性化广告填充率
     * @param float $AdMarkerTime 中贴广告标记时间
     * @param float $ReplacedTime 中贴个性化替换时间
     * @param float $PreReplaceRate 前贴广告替换率
     * @param integer $PreReqNum 前贴广告请求数
     * @param integer $PreReplacedNum 前贴广告替换数
     * @param array $UsageDetails 各广告配置用量详情
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AdRequestSuccess",$param) and $param["AdRequestSuccess"] !== null) {
            $this->AdRequestSuccess = $param["AdRequestSuccess"];
        }

        if (array_key_exists("AdRequestFail",$param) and $param["AdRequestFail"] !== null) {
            $this->AdRequestFail = $param["AdRequestFail"];
        }

        if (array_key_exists("Impression",$param) and $param["Impression"] !== null) {
            $this->Impression = $param["Impression"];
        }

        if (array_key_exists("MidFillRate",$param) and $param["MidFillRate"] !== null) {
            $this->MidFillRate = $param["MidFillRate"];
        }

        if (array_key_exists("AdMarkerTime",$param) and $param["AdMarkerTime"] !== null) {
            $this->AdMarkerTime = $param["AdMarkerTime"];
        }

        if (array_key_exists("ReplacedTime",$param) and $param["ReplacedTime"] !== null) {
            $this->ReplacedTime = $param["ReplacedTime"];
        }

        if (array_key_exists("PreReplaceRate",$param) and $param["PreReplaceRate"] !== null) {
            $this->PreReplaceRate = $param["PreReplaceRate"];
        }

        if (array_key_exists("PreReqNum",$param) and $param["PreReqNum"] !== null) {
            $this->PreReqNum = $param["PreReqNum"];
        }

        if (array_key_exists("PreReplacedNum",$param) and $param["PreReplacedNum"] !== null) {
            $this->PreReplacedNum = $param["PreReplacedNum"];
        }

        if (array_key_exists("UsageDetails",$param) and $param["UsageDetails"] !== null) {
            $this->UsageDetails = [];
            foreach ($param["UsageDetails"] as $key => $value){
                $obj = new UsageDetail();
                $obj->deserialize($value);
                array_push($this->UsageDetails, $obj);
            }
        }
    }
}
