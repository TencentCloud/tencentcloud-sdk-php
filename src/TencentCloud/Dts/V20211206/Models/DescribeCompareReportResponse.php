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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareReport返回参数结构体
 *
 * @method CompareAbstractInfo getAbstract() 获取一致性校验摘要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbstract(CompareAbstractInfo $Abstract) 设置一致性校验摘要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompareDetailInfo getDetail() 获取一致性校验详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(CompareDetailInfo $Detail) 设置一致性校验详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCompareReportResponse extends AbstractModel
{
    /**
     * @var CompareAbstractInfo 一致性校验摘要信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abstract;

    /**
     * @var CompareDetailInfo 一致性校验详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CompareAbstractInfo $Abstract 一致性校验摘要信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompareDetailInfo $Detail 一致性校验详细信息
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
        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = new CompareAbstractInfo();
            $this->Abstract->deserialize($param["Abstract"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new CompareDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
