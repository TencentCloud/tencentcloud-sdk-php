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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectAIFakeFaces返回参数结构体
 *
 * @method string getAttackRiskLevel() 获取检测到的图片是否存在攻击：
Low：无攻击风险
Mid：中度疑似攻击
High：高度疑似攻击
 * @method void setAttackRiskLevel(string $AttackRiskLevel) 设置检测到的图片是否存在攻击：
Low：无攻击风险
Mid：中度疑似攻击
High：高度疑似攻击
 * @method array getAttackRiskDetailList() 获取检测到疑似的攻击痕迹列表
说明：未检测到攻击痕迹时，返回空数组
此出参仅作为结果判断的参考，实际应用仍建议使用AttackRiskLevel的结果。
 * @method void setAttackRiskDetailList(array $AttackRiskDetailList) 设置检测到疑似的攻击痕迹列表
说明：未检测到攻击痕迹时，返回空数组
此出参仅作为结果判断的参考，实际应用仍建议使用AttackRiskLevel的结果。
 * @method ExtraInfo getExtraInfo() 获取额外信息
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) 设置额外信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectAIFakeFacesResponse extends AbstractModel
{
    /**
     * @var string 检测到的图片是否存在攻击：
Low：无攻击风险
Mid：中度疑似攻击
High：高度疑似攻击
     */
    public $AttackRiskLevel;

    /**
     * @var array 检测到疑似的攻击痕迹列表
说明：未检测到攻击痕迹时，返回空数组
此出参仅作为结果判断的参考，实际应用仍建议使用AttackRiskLevel的结果。
     */
    public $AttackRiskDetailList;

    /**
     * @var ExtraInfo 额外信息
     */
    public $ExtraInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AttackRiskLevel 检测到的图片是否存在攻击：
Low：无攻击风险
Mid：中度疑似攻击
High：高度疑似攻击
     * @param array $AttackRiskDetailList 检测到疑似的攻击痕迹列表
说明：未检测到攻击痕迹时，返回空数组
此出参仅作为结果判断的参考，实际应用仍建议使用AttackRiskLevel的结果。
     * @param ExtraInfo $ExtraInfo 额外信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AttackRiskLevel",$param) and $param["AttackRiskLevel"] !== null) {
            $this->AttackRiskLevel = $param["AttackRiskLevel"];
        }

        if (array_key_exists("AttackRiskDetailList",$param) and $param["AttackRiskDetailList"] !== null) {
            $this->AttackRiskDetailList = [];
            foreach ($param["AttackRiskDetailList"] as $key => $value){
                $obj = new AttackRiskDetail();
                $obj->deserialize($value);
                array_push($this->AttackRiskDetailList, $obj);
            }
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
