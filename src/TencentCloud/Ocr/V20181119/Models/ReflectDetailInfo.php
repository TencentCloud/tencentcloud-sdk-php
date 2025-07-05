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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反光点覆盖区域详情结果
 *
 * @method string getPosition() 获取NationalEmblem 国徽位置
Portrait 人像照片位置
RecognitionField 识别字段位置
Others 其他位置
 * @method void setPosition(string $Position) 设置NationalEmblem 国徽位置
Portrait 人像照片位置
RecognitionField 识别字段位置
Others 其他位置
 */
class ReflectDetailInfo extends AbstractModel
{
    /**
     * @var string NationalEmblem 国徽位置
Portrait 人像照片位置
RecognitionField 识别字段位置
Others 其他位置
     */
    public $Position;

    /**
     * @param string $Position NationalEmblem 国徽位置
Portrait 人像照片位置
RecognitionField 识别字段位置
Others 其他位置
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
        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }
    }
}
