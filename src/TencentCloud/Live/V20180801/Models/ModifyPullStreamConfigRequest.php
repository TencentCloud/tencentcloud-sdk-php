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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPullStreamConfig请求参数结构体
 *
 * @method string getConfigId() 获取<p>配置 ID。<br>获取来源：</p><ol><li>创建拉流配置接口CreatePullStreamConfig返回的配置 ID。</li><li>通过查询接口DescribePullStreamConfigs获取配置 ID。</li></ol>
 * @method void setConfigId(string $ConfigId) 设置<p>配置 ID。<br>获取来源：</p><ol><li>创建拉流配置接口CreatePullStreamConfig返回的配置 ID。</li><li>通过查询接口DescribePullStreamConfigs获取配置 ID。</li></ol>
 * @method string getFromUrl() 获取<p>源 URL，用于拉流的地址。目前可支持直播流及点播文件。<br>注意：</p><ol><li>多个点播 URL 之间使用空格拼接。</li><li>目前上限支持10个 URL。</li><li>支持拉流文件格式：FLV，RTMP，HLS，MP4。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
 * @method void setFromUrl(string $FromUrl) 设置<p>源 URL，用于拉流的地址。目前可支持直播流及点播文件。<br>注意：</p><ol><li>多个点播 URL 之间使用空格拼接。</li><li>目前上限支持10个 URL。</li><li>支持拉流文件格式：FLV，RTMP，HLS，MP4。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
 * @method string getToUrl() 获取<p>目的 URL，用于推流的地址，目前限制该目标地址为腾讯域名。</p><ol><li>仅支持 RTMP 协议。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
 * @method void setToUrl(string $ToUrl) 设置<p>目的 URL，用于推流的地址，目前限制该目标地址为腾讯域名。</p><ol><li>仅支持 RTMP 协议。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
 * @method integer getAreaId() 获取<p>区域 ID：<br>1-深圳。<br>2-上海。<br>3-天津。<br>4-中国香港。<br>如有改动，需同时传入IspId。</p>
 * @method void setAreaId(integer $AreaId) 设置<p>区域 ID：<br>1-深圳。<br>2-上海。<br>3-天津。<br>4-中国香港。<br>如有改动，需同时传入IspId。</p>
 * @method integer getIspId() 获取<p>运营商 ID，<br>1：电信。<br>2：移动。<br>3：联通。<br>4：其他。<br>AreaId为4的时候，IspId只能为其他。如有改动，需同时传入AreaId。</p>
 * @method void setIspId(integer $IspId) 设置<p>运营商 ID，<br>1：电信。<br>2：移动。<br>3：联通。<br>4：其他。<br>AreaId为4的时候，IspId只能为其他。如有改动，需同时传入AreaId。</p>
 * @method string getStartTime() 获取<p>开始时间。<br>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。<br>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method string getEndTime() 获取<p>结束时间，注意：</p><ol><li>结束时间必须大于开始时间；</li><li>结束时间和开始时间必须大于当前时间；</li><li>结束时间 和 开始时间 间隔必须小于七天。</li></ol><p>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，注意：</p><ol><li>结束时间必须大于开始时间；</li><li>结束时间和开始时间必须大于当前时间；</li><li>结束时间 和 开始时间 间隔必须小于七天。</li></ol><p>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 */
class ModifyPullStreamConfigRequest extends AbstractModel
{
    /**
     * @var string <p>配置 ID。<br>获取来源：</p><ol><li>创建拉流配置接口CreatePullStreamConfig返回的配置 ID。</li><li>通过查询接口DescribePullStreamConfigs获取配置 ID。</li></ol>
     */
    public $ConfigId;

    /**
     * @var string <p>源 URL，用于拉流的地址。目前可支持直播流及点播文件。<br>注意：</p><ol><li>多个点播 URL 之间使用空格拼接。</li><li>目前上限支持10个 URL。</li><li>支持拉流文件格式：FLV，RTMP，HLS，MP4。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
     */
    public $FromUrl;

    /**
     * @var string <p>目的 URL，用于推流的地址，目前限制该目标地址为腾讯域名。</p><ol><li>仅支持 RTMP 协议。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
     */
    public $ToUrl;

    /**
     * @var integer <p>区域 ID：<br>1-深圳。<br>2-上海。<br>3-天津。<br>4-中国香港。<br>如有改动，需同时传入IspId。</p>
     */
    public $AreaId;

    /**
     * @var integer <p>运营商 ID，<br>1：电信。<br>2：移动。<br>3：联通。<br>4：其他。<br>AreaId为4的时候，IspId只能为其他。如有改动，需同时传入AreaId。</p>
     */
    public $IspId;

    /**
     * @var string <p>开始时间。<br>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，注意：</p><ol><li>结束时间必须大于开始时间；</li><li>结束时间和开始时间必须大于当前时间；</li><li>结束时间 和 开始时间 间隔必须小于七天。</li></ol><p>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $EndTime;

    /**
     * @param string $ConfigId <p>配置 ID。<br>获取来源：</p><ol><li>创建拉流配置接口CreatePullStreamConfig返回的配置 ID。</li><li>通过查询接口DescribePullStreamConfigs获取配置 ID。</li></ol>
     * @param string $FromUrl <p>源 URL，用于拉流的地址。目前可支持直播流及点播文件。<br>注意：</p><ol><li>多个点播 URL 之间使用空格拼接。</li><li>目前上限支持10个 URL。</li><li>支持拉流文件格式：FLV，RTMP，HLS，MP4。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
     * @param string $ToUrl <p>目的 URL，用于推流的地址，目前限制该目标地址为腾讯域名。</p><ol><li>仅支持 RTMP 协议。</li><li>使用标准三层样式，如：http://test.com/live/stream.flv。</li></ol>
     * @param integer $AreaId <p>区域 ID：<br>1-深圳。<br>2-上海。<br>3-天津。<br>4-中国香港。<br>如有改动，需同时传入IspId。</p>
     * @param integer $IspId <p>运营商 ID，<br>1：电信。<br>2：移动。<br>3：联通。<br>4：其他。<br>AreaId为4的时候，IspId只能为其他。如有改动，需同时传入AreaId。</p>
     * @param string $StartTime <p>开始时间。<br>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param string $EndTime <p>结束时间，注意：</p><ol><li>结束时间必须大于开始时间；</li><li>结束时间和开始时间必须大于当前时间；</li><li>结束时间 和 开始时间 间隔必须小于七天。</li></ol><p>使用UTC格式时间，<br>例如：2019-01-08T10:00:00Z。<br>注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("FromUrl",$param) and $param["FromUrl"] !== null) {
            $this->FromUrl = $param["FromUrl"];
        }

        if (array_key_exists("ToUrl",$param) and $param["ToUrl"] !== null) {
            $this->ToUrl = $param["ToUrl"];
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("IspId",$param) and $param["IspId"] !== null) {
            $this->IspId = $param["IspId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
