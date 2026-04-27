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
 * DescribeAigcUsageData请求参数结构体
 *
 * @method string getStartTime() 获取<p>起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
 * @method void setStartTime(string $StartTime) 设置<p>起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
 * @method string getEndTime() 获取<p>结束日期，需大于等于起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束日期，需大于等于起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
 * @method string getAigcType() 获取<p>AIGC类型。</p><p>枚举值：</p><ul><li>Video： 视频</li><li>Image： 图片</li><li>Text： 文本</li><li>SceneAigcVideo： 场景化视频处理</li><li>SceneAigcImage： 场景化图片处理</li><li>SceneAigcTime： 场景化处理次数</li></ul>
 * @method void setAigcType(string $AigcType) 设置<p>AIGC类型。</p><p>枚举值：</p><ul><li>Video： 视频</li><li>Image： 图片</li><li>Text： 文本</li><li>SceneAigcVideo： 场景化视频处理</li><li>SceneAigcImage： 场景化图片处理</li><li>SceneAigcTime： 场景化处理次数</li></ul>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 */
class DescribeAigcUsageDataRequest extends AbstractModel
{
    /**
     * @var string <p>起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束日期，需大于等于起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
     */
    public $EndTime;

    /**
     * @var string <p>AIGC类型。</p><p>枚举值：</p><ul><li>Video： 视频</li><li>Image： 图片</li><li>Text： 文本</li><li>SceneAigcVideo： 场景化视频处理</li><li>SceneAigcImage： 场景化图片处理</li><li>SceneAigcTime： 场景化处理次数</li></ul>
     */
    public $AigcType;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @param string $StartTime <p>起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
     * @param string $EndTime <p>结束日期，需大于等于起始日期。使用 <a href="https://cloud.tencent.com/document/product/266/11732#52">ISO 日期格式</a>。</p>
     * @param string $AigcType <p>AIGC类型。</p><p>枚举值：</p><ul><li>Video： 视频</li><li>Image： 图片</li><li>Text： 文本</li><li>SceneAigcVideo： 场景化视频处理</li><li>SceneAigcImage： 场景化图片处理</li><li>SceneAigcTime： 场景化处理次数</li></ul>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AigcType",$param) and $param["AigcType"] !== null) {
            $this->AigcType = $param["AigcType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
