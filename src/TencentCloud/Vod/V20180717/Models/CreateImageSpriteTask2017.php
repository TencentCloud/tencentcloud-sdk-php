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
 * 视频截取雪碧图任务，该结构仅用于对 2017 版[截取雪碧图](https://cloud.tencent.com/document/product/266/8101)接口发起的任务。
 *
 * @method string getTaskId() 获取<p>截图雪碧图任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>截图雪碧图任务 ID。</p>
 * @method integer getErrCode() 获取<p>错误码</p><li>0：成功；</li><li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码</p><li>0：成功；</li><li>其他值：失败。</li>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method string getFileId() 获取<p>截取雪碧图文件 ID。</p>
 * @method void setFileId(string $FileId) 设置<p>截取雪碧图文件 ID。</p>
 * @method integer getDefinition() 获取<p>雪碧图规格，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">雪碧图截图模板</a>。</p>
 * @method void setDefinition(integer $Definition) 设置<p>雪碧图规格，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">雪碧图截图模板</a>。</p>
 * @method integer getTotalCount() 获取<p>雪碧图小图总数量。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>雪碧图小图总数量。</p>
 * @method array getImageSpriteUrlSet() 获取<p>截取雪碧图输出的地址。</p>
 * @method void setImageSpriteUrlSet(array $ImageSpriteUrlSet) 设置<p>截取雪碧图输出的地址。</p>
 * @method string getWebVttUrl() 获取<p>雪碧图子图位置与时间关系 WebVtt 文件地址。</p>
 * @method void setWebVttUrl(string $WebVttUrl) 设置<p>雪碧图子图位置与时间关系 WebVtt 文件地址。</p>
 */
class CreateImageSpriteTask2017 extends AbstractModel
{
    /**
     * @var string <p>截图雪碧图任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>错误码</p><li>0：成功；</li><li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var string <p>截取雪碧图文件 ID。</p>
     */
    public $FileId;

    /**
     * @var integer <p>雪碧图规格，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">雪碧图截图模板</a>。</p>
     */
    public $Definition;

    /**
     * @var integer <p>雪碧图小图总数量。</p>
     */
    public $TotalCount;

    /**
     * @var array <p>截取雪碧图输出的地址。</p>
     */
    public $ImageSpriteUrlSet;

    /**
     * @var string <p>雪碧图子图位置与时间关系 WebVtt 文件地址。</p>
     */
    public $WebVttUrl;

    /**
     * @param string $TaskId <p>截图雪碧图任务 ID。</p>
     * @param integer $ErrCode <p>错误码</p><li>0：成功；</li><li>其他值：失败。</li>
     * @param string $Message <p>错误信息。</p>
     * @param string $FileId <p>截取雪碧图文件 ID。</p>
     * @param integer $Definition <p>雪碧图规格，参见<a href="https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">雪碧图截图模板</a>。</p>
     * @param integer $TotalCount <p>雪碧图小图总数量。</p>
     * @param array $ImageSpriteUrlSet <p>截取雪碧图输出的地址。</p>
     * @param string $WebVttUrl <p>雪碧图子图位置与时间关系 WebVtt 文件地址。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ImageSpriteUrlSet",$param) and $param["ImageSpriteUrlSet"] !== null) {
            $this->ImageSpriteUrlSet = $param["ImageSpriteUrlSet"];
        }

        if (array_key_exists("WebVttUrl",$param) and $param["WebVttUrl"] !== null) {
            $this->WebVttUrl = $param["WebVttUrl"];
        }
    }
}
