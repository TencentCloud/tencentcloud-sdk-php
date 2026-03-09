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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePatchInfo返回参数结构体
 *
 * @method string getKbNo() 获取kb编号
 * @method void setKbNo(string $KbNo) 设置kb编号
 * @method string getPatchName() 获取kb名称
 * @method void setPatchName(string $PatchName) 设置kb名称
 * @method string getPublishTime() 获取kb 发布日期
 * @method void setPublishTime(string $PublishTime) 设置kb 发布日期
 * @method string getReferUrl() 获取参考链接
 * @method void setReferUrl(string $ReferUrl) 设置参考链接
 * @method integer getVulCount() 获取包含漏洞数
 * @method void setVulCount(integer $VulCount) 设置包含漏洞数
 * @method array getRelateVulInfoList() 获取补丁关联的漏洞详情列表
 * @method void setRelateVulInfoList(array $RelateVulInfoList) 设置补丁关联的漏洞详情列表
 * @method integer getKbId() 获取补丁id
 * @method void setKbId(integer $KbId) 设置补丁id
 * @method string getRelateVulCveId() 获取关联的漏洞CveId，多个id由","分隔
 * @method void setRelateVulCveId(string $RelateVulCveId) 设置关联的漏洞CveId，多个id由","分隔
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePatchInfoResponse extends AbstractModel
{
    /**
     * @var string kb编号
     */
    public $KbNo;

    /**
     * @var string kb名称
     */
    public $PatchName;

    /**
     * @var string kb 发布日期
     */
    public $PublishTime;

    /**
     * @var string 参考链接
     */
    public $ReferUrl;

    /**
     * @var integer 包含漏洞数
     */
    public $VulCount;

    /**
     * @var array 补丁关联的漏洞详情列表
     */
    public $RelateVulInfoList;

    /**
     * @var integer 补丁id
     */
    public $KbId;

    /**
     * @var string 关联的漏洞CveId，多个id由","分隔
     */
    public $RelateVulCveId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KbNo kb编号
     * @param string $PatchName kb名称
     * @param string $PublishTime kb 发布日期
     * @param string $ReferUrl 参考链接
     * @param integer $VulCount 包含漏洞数
     * @param array $RelateVulInfoList 补丁关联的漏洞详情列表
     * @param integer $KbId 补丁id
     * @param string $RelateVulCveId 关联的漏洞CveId，多个id由","分隔
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
        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("PatchName",$param) and $param["PatchName"] !== null) {
            $this->PatchName = $param["PatchName"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("ReferUrl",$param) and $param["ReferUrl"] !== null) {
            $this->ReferUrl = $param["ReferUrl"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("RelateVulInfoList",$param) and $param["RelateVulInfoList"] !== null) {
            $this->RelateVulInfoList = [];
            foreach ($param["RelateVulInfoList"] as $key => $value){
                $obj = new RelateVulInfo();
                $obj->deserialize($value);
                array_push($this->RelateVulInfoList, $obj);
            }
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("RelateVulCveId",$param) and $param["RelateVulCveId"] !== null) {
            $this->RelateVulCveId = $param["RelateVulCveId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
