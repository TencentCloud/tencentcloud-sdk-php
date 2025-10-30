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
 * DescribeCasterPlayUrl请求参数结构体
 *
 * @method integer getCasterId() 获取导播台ID
 * @method void setCasterId(integer $CasterId) 设置导播台ID
 * @method integer getPlayUrlType() 获取请求播放url的类型。
取值范围[1，2，3]
1：获取输入源的播放url
2：获取pvw的播放url
3：获取pgm的播放url
 * @method void setPlayUrlType(integer $PlayUrlType) 设置请求播放url的类型。
取值范围[1，2，3]
1：获取输入源的播放url
2：获取pvw的播放url
3：获取pgm的播放url
 * @method integer getPlayUrlIndex() 获取仅在PlayUrlType为1时生效，此时该参数表示请求的输入源Index。
注：对应的输入源必须存在。
 * @method void setPlayUrlIndex(integer $PlayUrlIndex) 设置仅在PlayUrlType为1时生效，此时该参数表示请求的输入源Index。
注：对应的输入源必须存在。
 */
class DescribeCasterPlayUrlRequest extends AbstractModel
{
    /**
     * @var integer 导播台ID
     */
    public $CasterId;

    /**
     * @var integer 请求播放url的类型。
取值范围[1，2，3]
1：获取输入源的播放url
2：获取pvw的播放url
3：获取pgm的播放url
     */
    public $PlayUrlType;

    /**
     * @var integer 仅在PlayUrlType为1时生效，此时该参数表示请求的输入源Index。
注：对应的输入源必须存在。
     */
    public $PlayUrlIndex;

    /**
     * @param integer $CasterId 导播台ID
     * @param integer $PlayUrlType 请求播放url的类型。
取值范围[1，2，3]
1：获取输入源的播放url
2：获取pvw的播放url
3：获取pgm的播放url
     * @param integer $PlayUrlIndex 仅在PlayUrlType为1时生效，此时该参数表示请求的输入源Index。
注：对应的输入源必须存在。
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
        if (array_key_exists("CasterId",$param) and $param["CasterId"] !== null) {
            $this->CasterId = $param["CasterId"];
        }

        if (array_key_exists("PlayUrlType",$param) and $param["PlayUrlType"] !== null) {
            $this->PlayUrlType = $param["PlayUrlType"];
        }

        if (array_key_exists("PlayUrlIndex",$param) and $param["PlayUrlIndex"] !== null) {
            $this->PlayUrlIndex = $param["PlayUrlIndex"];
        }
    }
}
