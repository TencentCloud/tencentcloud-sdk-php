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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCdnLogs请求参数结构体
 *
 * @method string getDomainName() 获取<p>域名。</p>
 * @method void setDomainName(string $DomainName) 设置<p>域名。</p>
 * @method string getStartTime() 获取<p>获取日志起始时间点，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setStartTime(string $StartTime) 设置<p>获取日志起始时间点，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getEndTime() 获取<p>结束时间需大于起始时间；使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间需大于起始时间；使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method integer getLimit() 获取<p>分页拉取的最大返回结果数。默认值：100；最大值：1000。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页拉取的最大返回结果数。默认值：100；最大值：1000。</p>
 * @method integer getOffset() 获取<p>分页拉取的起始偏移量。默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页拉取的起始偏移量。默认值：0。</p>
 */
class DescribeCdnLogsRequest extends AbstractModel
{
    /**
     * @var string <p>域名。</p>
     */
    public $DomainName;

    /**
     * @var string <p>获取日志起始时间点，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间需大于起始时间；使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $EndTime;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var integer <p>分页拉取的最大返回结果数。默认值：100；最大值：1000。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页拉取的起始偏移量。默认值：0。</p>
     */
    public $Offset;

    /**
     * @param string $DomainName <p>域名。</p>
     * @param string $StartTime <p>获取日志起始时间点，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $EndTime <p>结束时间需大于起始时间；使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param integer $Limit <p>分页拉取的最大返回结果数。默认值：100；最大值：1000。</p>
     * @param integer $Offset <p>分页拉取的起始偏移量。默认值：0。</p>
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
