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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVMusicsByTag返回参数结构体
 *
 * @method array getKTVMusicInfoSet() 获取歌曲信息列表。
 * @method void setKTVMusicInfoSet(array $KTVMusicInfoSet) 设置歌曲信息列表。
 * @method string getScrollToken() 获取滚动标记，用于设置下次请求的 ScrollToken 参数。
 * @method void setScrollToken(string $ScrollToken) 设置滚动标记，用于设置下次请求的 ScrollToken 参数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVMusicsByTagResponse extends AbstractModel
{
    /**
     * @var array 歌曲信息列表。
     */
    public $KTVMusicInfoSet;

    /**
     * @var string 滚动标记，用于设置下次请求的 ScrollToken 参数。
     */
    public $ScrollToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $KTVMusicInfoSet 歌曲信息列表。
     * @param string $ScrollToken 滚动标记，用于设置下次请求的 ScrollToken 参数。
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
        if (array_key_exists("KTVMusicInfoSet",$param) and $param["KTVMusicInfoSet"] !== null) {
            $this->KTVMusicInfoSet = [];
            foreach ($param["KTVMusicInfoSet"] as $key => $value){
                $obj = new KTVMusicBaseInfo();
                $obj->deserialize($value);
                array_push($this->KTVMusicInfoSet, $obj);
            }
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
