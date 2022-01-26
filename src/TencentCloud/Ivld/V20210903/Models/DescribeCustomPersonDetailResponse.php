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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomPersonDetail返回参数结构体
 *
 * @method CustomPersonInfo getPersonInfo() 获取自定义人物信息
 * @method void setPersonInfo(CustomPersonInfo $PersonInfo) 设置自定义人物信息
 * @method array getTaskIdSet() 获取出现该自定义人物的所有分析人物Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIdSet(array $TaskIdSet) 设置出现该自定义人物的所有分析人物Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCustomPersonDetailResponse extends AbstractModel
{
    /**
     * @var CustomPersonInfo 自定义人物信息
     */
    public $PersonInfo;

    /**
     * @var array 出现该自定义人物的所有分析人物Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIdSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CustomPersonInfo $PersonInfo 自定义人物信息
     * @param array $TaskIdSet 出现该自定义人物的所有分析人物Id
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
        if (array_key_exists("PersonInfo",$param) and $param["PersonInfo"] !== null) {
            $this->PersonInfo = new CustomPersonInfo();
            $this->PersonInfo->deserialize($param["PersonInfo"]);
        }

        if (array_key_exists("TaskIdSet",$param) and $param["TaskIdSet"] !== null) {
            $this->TaskIdSet = $param["TaskIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
