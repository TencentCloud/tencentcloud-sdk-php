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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNoticeContentTmpl返回参数结构体
 *
 * @method array getNoticeContentTmpls() 获取自定义通知内容模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeContentTmpls(array $NoticeContentTmpls) 设置自定义通知内容模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeContentTmplBindPolicyCounts() 获取通知内容模板绑定的告警策略数量
 * @method void setNoticeContentTmplBindPolicyCounts(array $NoticeContentTmplBindPolicyCounts) 设置通知内容模板绑定的告警策略数量
 * @method integer getPageNumber() 获取分页数
 * @method void setPageNumber(integer $PageNumber) 设置分页数
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getTotalCount() 获取结果总数
 * @method void setTotalCount(integer $TotalCount) 设置结果总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNoticeContentTmplResponse extends AbstractModel
{
    /**
     * @var array 自定义通知内容模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeContentTmpls;

    /**
     * @var array 通知内容模板绑定的告警策略数量
     */
    public $NoticeContentTmplBindPolicyCounts;

    /**
     * @var integer 分页数
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 结果总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NoticeContentTmpls 自定义通知内容模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeContentTmplBindPolicyCounts 通知内容模板绑定的告警策略数量
     * @param integer $PageNumber 分页数
     * @param integer $PageSize 分页大小
     * @param integer $TotalCount 结果总数
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
        if (array_key_exists("NoticeContentTmpls",$param) and $param["NoticeContentTmpls"] !== null) {
            $this->NoticeContentTmpls = [];
            foreach ($param["NoticeContentTmpls"] as $key => $value){
                $obj = new NoticeContentTmpl();
                $obj->deserialize($value);
                array_push($this->NoticeContentTmpls, $obj);
            }
        }

        if (array_key_exists("NoticeContentTmplBindPolicyCounts",$param) and $param["NoticeContentTmplBindPolicyCounts"] !== null) {
            $this->NoticeContentTmplBindPolicyCounts = [];
            foreach ($param["NoticeContentTmplBindPolicyCounts"] as $key => $value){
                $obj = new NoticeContentTmplBindPolicyCount();
                $obj->deserialize($value);
                array_push($this->NoticeContentTmplBindPolicyCounts, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
