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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVodCloudStorageVideoList返回参数结构体
 *
 * @method string getVodAppId() 获取<p>播放器使用的 VOD 子应用 ID</p>
 * @method void setVodAppId(string $VodAppId) 设置<p>播放器使用的 VOD 子应用 ID</p>
 * @method array getVideoList() 获取<p>视频列表</p>
 * @method void setVideoList(array $VideoList) 设置<p>视频列表</p>
 * @method boolean getListover() 获取<p>是否已拉完</p>
 * @method void setListover(boolean $Listover) 设置<p>是否已拉完</p>
 * @method string getContext() 获取<p>下一页游标</p>
 * @method void setContext(string $Context) 设置<p>下一页游标</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetVodCloudStorageVideoListResponse extends AbstractModel
{
    /**
     * @var string <p>播放器使用的 VOD 子应用 ID</p>
     */
    public $VodAppId;

    /**
     * @var array <p>视频列表</p>
     */
    public $VideoList;

    /**
     * @var boolean <p>是否已拉完</p>
     */
    public $Listover;

    /**
     * @var string <p>下一页游标</p>
     */
    public $Context;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VodAppId <p>播放器使用的 VOD 子应用 ID</p>
     * @param array $VideoList <p>视频列表</p>
     * @param boolean $Listover <p>是否已拉完</p>
     * @param string $Context <p>下一页游标</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VodAppId",$param) and $param["VodAppId"] !== null) {
            $this->VodAppId = $param["VodAppId"];
        }

        if (array_key_exists("VideoList",$param) and $param["VideoList"] !== null) {
            $this->VideoList = [];
            foreach ($param["VideoList"] as $key => $value){
                $obj = new VideoList();
                $obj->deserialize($value);
                array_push($this->VideoList, $obj);
            }
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
