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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVPlaylistDetail返回参数结构体
 *
 * @method array getKTVMusicInfoSet() 获取歌曲基础信息列表
 * @method void setKTVMusicInfoSet(array $KTVMusicInfoSet) 设置歌曲基础信息列表
 * @method KTVPlaylistBaseInfo getPlaylistBaseInfo() 获取歌单基础信息
 * @method void setPlaylistBaseInfo(KTVPlaylistBaseInfo $PlaylistBaseInfo) 设置歌单基础信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVPlaylistDetailResponse extends AbstractModel
{
    /**
     * @var array 歌曲基础信息列表
     */
    public $KTVMusicInfoSet;

    /**
     * @var KTVPlaylistBaseInfo 歌单基础信息
     */
    public $PlaylistBaseInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $KTVMusicInfoSet 歌曲基础信息列表
     * @param KTVPlaylistBaseInfo $PlaylistBaseInfo 歌单基础信息
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

        if (array_key_exists("PlaylistBaseInfo",$param) and $param["PlaylistBaseInfo"] !== null) {
            $this->PlaylistBaseInfo = new KTVPlaylistBaseInfo();
            $this->PlaylistBaseInfo->deserialize($param["PlaylistBaseInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
