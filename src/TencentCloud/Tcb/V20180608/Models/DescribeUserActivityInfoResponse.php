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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserActivityInfo返回参数结构体
 *
 * @method string getTag() 获取自定义标记，1元钱裂变需求中即代指`团id`
 * @method void setTag(string $Tag) 设置自定义标记，1元钱裂变需求中即代指`团id`
 * @method string getNotes() 获取自定义备注，1元钱裂变需求中返回`团列表`，uin列表通过","拼接
 * @method void setNotes(string $Notes) 设置自定义备注，1元钱裂变需求中返回`团列表`，uin列表通过","拼接
 * @method integer getActivityTimeLeft() 获取活动剩余时间，单位为s.1元钱裂变需求中即为 time(活动过期时间)-Now()), 过期后为0，即返回必为自然数
 * @method void setActivityTimeLeft(integer $ActivityTimeLeft) 设置活动剩余时间，单位为s.1元钱裂变需求中即为 time(活动过期时间)-Now()), 过期后为0，即返回必为自然数
 * @method integer getGroupTimeLeft() 获取拼团剩余时间，单位为s.1元钱裂变需求中即为time(成团时间)+24H-Now()，过期后为0，即返回必为自然数
 * @method void setGroupTimeLeft(integer $GroupTimeLeft) 设置拼团剩余时间，单位为s.1元钱裂变需求中即为time(成团时间)+24H-Now()，过期后为0，即返回必为自然数
 * @method string getNickNameList() 获取昵称列表,通过","拼接， 1元钱裂变活动中与Notes中uin一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickNameList(string $NickNameList) 设置昵称列表,通过","拼接， 1元钱裂变活动中与Notes中uin一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserActivityInfoResponse extends AbstractModel
{
    /**
     * @var string 自定义标记，1元钱裂变需求中即代指`团id`
     */
    public $Tag;

    /**
     * @var string 自定义备注，1元钱裂变需求中返回`团列表`，uin列表通过","拼接
     */
    public $Notes;

    /**
     * @var integer 活动剩余时间，单位为s.1元钱裂变需求中即为 time(活动过期时间)-Now()), 过期后为0，即返回必为自然数
     */
    public $ActivityTimeLeft;

    /**
     * @var integer 拼团剩余时间，单位为s.1元钱裂变需求中即为time(成团时间)+24H-Now()，过期后为0，即返回必为自然数
     */
    public $GroupTimeLeft;

    /**
     * @var string 昵称列表,通过","拼接， 1元钱裂变活动中与Notes中uin一一对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickNameList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Tag 自定义标记，1元钱裂变需求中即代指`团id`
     * @param string $Notes 自定义备注，1元钱裂变需求中返回`团列表`，uin列表通过","拼接
     * @param integer $ActivityTimeLeft 活动剩余时间，单位为s.1元钱裂变需求中即为 time(活动过期时间)-Now()), 过期后为0，即返回必为自然数
     * @param integer $GroupTimeLeft 拼团剩余时间，单位为s.1元钱裂变需求中即为time(成团时间)+24H-Now()，过期后为0，即返回必为自然数
     * @param string $NickNameList 昵称列表,通过","拼接， 1元钱裂变活动中与Notes中uin一一对应
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("ActivityTimeLeft",$param) and $param["ActivityTimeLeft"] !== null) {
            $this->ActivityTimeLeft = $param["ActivityTimeLeft"];
        }

        if (array_key_exists("GroupTimeLeft",$param) and $param["GroupTimeLeft"] !== null) {
            $this->GroupTimeLeft = $param["GroupTimeLeft"];
        }

        if (array_key_exists("NickNameList",$param) and $param["NickNameList"] !== null) {
            $this->NickNameList = $param["NickNameList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
