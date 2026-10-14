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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视觉理解计划源素材 URL 信息
 *
 * @method string getVLPlanResultId() 获取<p>分析结果 ID</p>
 * @method void setVLPlanResultId(string $VLPlanResultId) 设置<p>分析结果 ID</p>
 * @method string getSourceFileURL() 获取<p>源素材下载 URL（失败时为空）</p>
 * @method void setSourceFileURL(string $SourceFileURL) 设置<p>源素材下载 URL（失败时为空）</p>
 * @method integer getExpire() 获取<p>URL 有效期（秒，失败时为 0）</p>
 * @method void setExpire(integer $Expire) 设置<p>URL 有效期（秒，失败时为 0）</p>
 * @method string getErrMsg() 获取<p>错误信息（失败时有值）</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息（失败时有值）</p>
 */
class VLPlanResultSnapshotImageUrlInfo extends AbstractModel
{
    /**
     * @var string <p>分析结果 ID</p>
     */
    public $VLPlanResultId;

    /**
     * @var string <p>源素材下载 URL（失败时为空）</p>
     */
    public $SourceFileURL;

    /**
     * @var integer <p>URL 有效期（秒，失败时为 0）</p>
     */
    public $Expire;

    /**
     * @var string <p>错误信息（失败时有值）</p>
     */
    public $ErrMsg;

    /**
     * @param string $VLPlanResultId <p>分析结果 ID</p>
     * @param string $SourceFileURL <p>源素材下载 URL（失败时为空）</p>
     * @param integer $Expire <p>URL 有效期（秒，失败时为 0）</p>
     * @param string $ErrMsg <p>错误信息（失败时有值）</p>
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
        if (array_key_exists("VLPlanResultId",$param) and $param["VLPlanResultId"] !== null) {
            $this->VLPlanResultId = $param["VLPlanResultId"];
        }

        if (array_key_exists("SourceFileURL",$param) and $param["SourceFileURL"] !== null) {
            $this->SourceFileURL = $param["SourceFileURL"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
