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
 * FastEditMedia请求参数结构体
 *
 * @method array getFileInfos() 获取输入的媒体文件信息。最多支持传入100个媒体。
 * @method void setFileInfos(array $FileInfos) 设置输入的媒体文件信息。最多支持传入100个媒体。
 * @method string getClipMode() 获取ClipMode 用来表示剪辑时间点落在一个 TS 分片中间时，是否包含这个分片。共有两种取值： <li>StartInclusiveEndInclusive：当剪辑起始时间点和结束时间点落在一个分片的中间时，都会包含这个分片；</li> <li>StartInclusiveEndExclusive：当起始时间点落在一个分片的中间时，会包含这个分片；而当结束时间点落在一个分片的中间时，不会包含这个分片。</li> 不填时，默认为 StartInclusiveEndInclusive。
 * @method void setClipMode(string $ClipMode) 设置ClipMode 用来表示剪辑时间点落在一个 TS 分片中间时，是否包含这个分片。共有两种取值： <li>StartInclusiveEndInclusive：当剪辑起始时间点和结束时间点落在一个分片的中间时，都会包含这个分片；</li> <li>StartInclusiveEndExclusive：当起始时间点落在一个分片的中间时，会包含这个分片；而当结束时间点落在一个分片的中间时，不会包含这个分片。</li> 不填时，默认为 StartInclusiveEndInclusive。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 */
class FastEditMediaRequest extends AbstractModel
{
    /**
     * @var array 输入的媒体文件信息。最多支持传入100个媒体。
     */
    public $FileInfos;

    /**
     * @var string ClipMode 用来表示剪辑时间点落在一个 TS 分片中间时，是否包含这个分片。共有两种取值： <li>StartInclusiveEndInclusive：当剪辑起始时间点和结束时间点落在一个分片的中间时，都会包含这个分片；</li> <li>StartInclusiveEndExclusive：当起始时间点落在一个分片的中间时，会包含这个分片；而当结束时间点落在一个分片的中间时，不会包含这个分片。</li> 不填时，默认为 StartInclusiveEndInclusive。
     */
    public $ClipMode;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @param array $FileInfos 输入的媒体文件信息。最多支持传入100个媒体。
     * @param string $ClipMode ClipMode 用来表示剪辑时间点落在一个 TS 分片中间时，是否包含这个分片。共有两种取值： <li>StartInclusiveEndInclusive：当剪辑起始时间点和结束时间点落在一个分片的中间时，都会包含这个分片；</li> <li>StartInclusiveEndExclusive：当起始时间点落在一个分片的中间时，会包含这个分片；而当结束时间点落在一个分片的中间时，不会包含这个分片。</li> 不填时，默认为 StartInclusiveEndInclusive。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FastEditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ClipMode",$param) and $param["ClipMode"] !== null) {
            $this->ClipMode = $param["ClipMode"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
