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
 * BatchDescribeKTVMusicDetails返回参数结构体
 *
 * @method array getKTVMusicDetailInfoSet() 获取歌曲详细信息列表。
 * @method void setKTVMusicDetailInfoSet(array $KTVMusicDetailInfoSet) 设置歌曲详细信息列表。
 * @method array getNotExistMusicIdSet() 获取不存在歌曲Id列表。
 * @method void setNotExistMusicIdSet(array $NotExistMusicIdSet) 设置不存在歌曲Id列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class BatchDescribeKTVMusicDetailsResponse extends AbstractModel
{
    /**
     * @var array 歌曲详细信息列表。
     */
    public $KTVMusicDetailInfoSet;

    /**
     * @var array 不存在歌曲Id列表。
     */
    public $NotExistMusicIdSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $KTVMusicDetailInfoSet 歌曲详细信息列表。
     * @param array $NotExistMusicIdSet 不存在歌曲Id列表。
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
        if (array_key_exists("KTVMusicDetailInfoSet",$param) and $param["KTVMusicDetailInfoSet"] !== null) {
            $this->KTVMusicDetailInfoSet = [];
            foreach ($param["KTVMusicDetailInfoSet"] as $key => $value){
                $obj = new KTVMusicDetailInfo();
                $obj->deserialize($value);
                array_push($this->KTVMusicDetailInfoSet, $obj);
            }
        }

        if (array_key_exists("NotExistMusicIdSet",$param) and $param["NotExistMusicIdSet"] !== null) {
            $this->NotExistMusicIdSet = $param["NotExistMusicIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
