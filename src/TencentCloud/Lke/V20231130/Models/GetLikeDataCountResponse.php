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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLikeDataCount返回参数结构体
 *
 * @method integer getTotal() 获取可评价消息数
 * @method void setTotal(integer $Total) 设置可评价消息数
 * @method integer getAppraisalTotal() 获取评价数
 * @method void setAppraisalTotal(integer $AppraisalTotal) 设置评价数
 * @method float getParticipationRate() 获取参评率
 * @method void setParticipationRate(float $ParticipationRate) 设置参评率
 * @method integer getLikeTotal() 获取点赞数
 * @method void setLikeTotal(integer $LikeTotal) 设置点赞数
 * @method float getLikeRate() 获取点赞率
 * @method void setLikeRate(float $LikeRate) 设置点赞率
 * @method integer getDislikeTotal() 获取点踩数
 * @method void setDislikeTotal(integer $DislikeTotal) 设置点踩数
 * @method float getDislikeRate() 获取点踩率
 * @method void setDislikeRate(float $DislikeRate) 设置点踩率
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetLikeDataCountResponse extends AbstractModel
{
    /**
     * @var integer 可评价消息数
     */
    public $Total;

    /**
     * @var integer 评价数
     */
    public $AppraisalTotal;

    /**
     * @var float 参评率
     */
    public $ParticipationRate;

    /**
     * @var integer 点赞数
     */
    public $LikeTotal;

    /**
     * @var float 点赞率
     */
    public $LikeRate;

    /**
     * @var integer 点踩数
     */
    public $DislikeTotal;

    /**
     * @var float 点踩率
     */
    public $DislikeRate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 可评价消息数
     * @param integer $AppraisalTotal 评价数
     * @param float $ParticipationRate 参评率
     * @param integer $LikeTotal 点赞数
     * @param float $LikeRate 点赞率
     * @param integer $DislikeTotal 点踩数
     * @param float $DislikeRate 点踩率
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AppraisalTotal",$param) and $param["AppraisalTotal"] !== null) {
            $this->AppraisalTotal = $param["AppraisalTotal"];
        }

        if (array_key_exists("ParticipationRate",$param) and $param["ParticipationRate"] !== null) {
            $this->ParticipationRate = $param["ParticipationRate"];
        }

        if (array_key_exists("LikeTotal",$param) and $param["LikeTotal"] !== null) {
            $this->LikeTotal = $param["LikeTotal"];
        }

        if (array_key_exists("LikeRate",$param) and $param["LikeRate"] !== null) {
            $this->LikeRate = $param["LikeRate"];
        }

        if (array_key_exists("DislikeTotal",$param) and $param["DislikeTotal"] !== null) {
            $this->DislikeTotal = $param["DislikeTotal"];
        }

        if (array_key_exists("DislikeRate",$param) and $param["DislikeRate"] !== null) {
            $this->DislikeRate = $param["DislikeRate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
