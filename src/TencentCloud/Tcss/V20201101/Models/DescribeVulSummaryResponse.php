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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulSummary返回参数结构体
 *
 * @method integer getVulTotalCount() 获取漏洞总数量
 * @method void setVulTotalCount(integer $VulTotalCount) 设置漏洞总数量
 * @method integer getSeriousVulCount() 获取严重及高危漏洞数量
 * @method void setSeriousVulCount(integer $SeriousVulCount) 设置严重及高危漏洞数量
 * @method integer getSuggestVulCount() 获取重点关注漏洞数量
 * @method void setSuggestVulCount(integer $SuggestVulCount) 设置重点关注漏洞数量
 * @method integer getPocExpLevelVulCount() 获取有Poc或者Exp的漏洞数量
 * @method void setPocExpLevelVulCount(integer $PocExpLevelVulCount) 设置有Poc或者Exp的漏洞数量
 * @method integer getRemoteExpLevelVulCount() 获取有远程Exp的漏洞数量
 * @method void setRemoteExpLevelVulCount(integer $RemoteExpLevelVulCount) 设置有远程Exp的漏洞数量
 * @method integer getSeriousVulNewestImageCount() 获取受严重或高危漏洞影响的最新版本镜像数
 * @method void setSeriousVulNewestImageCount(integer $SeriousVulNewestImageCount) 设置受严重或高危漏洞影响的最新版本镜像数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulSummaryResponse extends AbstractModel
{
    /**
     * @var integer 漏洞总数量
     */
    public $VulTotalCount;

    /**
     * @var integer 严重及高危漏洞数量
     */
    public $SeriousVulCount;

    /**
     * @var integer 重点关注漏洞数量
     */
    public $SuggestVulCount;

    /**
     * @var integer 有Poc或者Exp的漏洞数量
     */
    public $PocExpLevelVulCount;

    /**
     * @var integer 有远程Exp的漏洞数量
     */
    public $RemoteExpLevelVulCount;

    /**
     * @var integer 受严重或高危漏洞影响的最新版本镜像数
     */
    public $SeriousVulNewestImageCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VulTotalCount 漏洞总数量
     * @param integer $SeriousVulCount 严重及高危漏洞数量
     * @param integer $SuggestVulCount 重点关注漏洞数量
     * @param integer $PocExpLevelVulCount 有Poc或者Exp的漏洞数量
     * @param integer $RemoteExpLevelVulCount 有远程Exp的漏洞数量
     * @param integer $SeriousVulNewestImageCount 受严重或高危漏洞影响的最新版本镜像数
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
        if (array_key_exists("VulTotalCount",$param) and $param["VulTotalCount"] !== null) {
            $this->VulTotalCount = $param["VulTotalCount"];
        }

        if (array_key_exists("SeriousVulCount",$param) and $param["SeriousVulCount"] !== null) {
            $this->SeriousVulCount = $param["SeriousVulCount"];
        }

        if (array_key_exists("SuggestVulCount",$param) and $param["SuggestVulCount"] !== null) {
            $this->SuggestVulCount = $param["SuggestVulCount"];
        }

        if (array_key_exists("PocExpLevelVulCount",$param) and $param["PocExpLevelVulCount"] !== null) {
            $this->PocExpLevelVulCount = $param["PocExpLevelVulCount"];
        }

        if (array_key_exists("RemoteExpLevelVulCount",$param) and $param["RemoteExpLevelVulCount"] !== null) {
            $this->RemoteExpLevelVulCount = $param["RemoteExpLevelVulCount"];
        }

        if (array_key_exists("SeriousVulNewestImageCount",$param) and $param["SeriousVulNewestImageCount"] !== null) {
            $this->SeriousVulNewestImageCount = $param["SeriousVulNewestImageCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
