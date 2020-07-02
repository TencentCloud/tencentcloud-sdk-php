<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUrlViolations返回参数结构体
 *
 * @method array getUrlRecordList() 获取违规 URL 详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlRecordList(array $UrlRecordList) 设置违规 URL 详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取记录总数，用于分页
 * @method void setTotalCount(integer $TotalCount) 设置记录总数，用于分页
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUrlViolationsResponse extends AbstractModel
{
    /**
     * @var array 违规 URL 详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlRecordList;

    /**
     * @var integer 记录总数，用于分页
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $UrlRecordList 违规 URL 详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 记录总数，用于分页
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
        if (array_key_exists('UrlRecordList',$param) and $param['UrlRecordList'] !== null) {
            $this->UrlRecordList = [];
            foreach ($param['UrlRecordList'] as $key => $value){
                $obj = new ViolationUrl();
                $obj->deserialize($value);
                array_push($this->UrlRecordList, $obj);
            }
        }

        if (array_key_exists('TotalCount',$param) and $param['TotalCount'] !== null) {
            $this->TotalCount = $param['TotalCount'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
