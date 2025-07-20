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
 * HandleCurrentPlaylist请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getRoundPlayId() 获取轮播播单唯一标识。
 * @method void setRoundPlayId(string $RoundPlayId) 设置轮播播单唯一标识。
 * @method string getOperation() 获取操作类型，取值有：<li>Insert：向当前播放列表插入节目。插入的节目在后续轮播过程仍然有效。</li> <li>InsertTemporary：向当前播放列表临时插入节目。临时插入的节目只在本次轮播过程生效。</li><li>Delete：删除播放列表中的节目。不能删除正在播放的节目。</li>
 * @method void setOperation(string $Operation) 设置操作类型，取值有：<li>Insert：向当前播放列表插入节目。插入的节目在后续轮播过程仍然有效。</li> <li>InsertTemporary：向当前播放列表临时插入节目。临时插入的节目只在本次轮播过程生效。</li><li>Delete：删除播放列表中的节目。不能删除正在播放的节目。</li>
 * @method string getItemId() 获取播单节目 ID。 <li>当 Operation 为 Insert 时，该字段必填，表示插入的节目列表位于该节目之后。</li> <li>当 Operation 为 InsertTemporary 时，该字段选填，不填时表示插入节目到最近的一个插入点上。当该字段填写时，如果同时填写 SegmentIndex，表示节目被插入到 ItemId 对应节目的第 SegmentIndex 分片后面，否则插入到该节目之后。</li> <li>当 Operation 为 Delete 时，该字段必填，表示删除该节目。不能删除正在播放的节目。</li>
 * @method void setItemId(string $ItemId) 设置播单节目 ID。 <li>当 Operation 为 Insert 时，该字段必填，表示插入的节目列表位于该节目之后。</li> <li>当 Operation 为 InsertTemporary 时，该字段选填，不填时表示插入节目到最近的一个插入点上。当该字段填写时，如果同时填写 SegmentIndex，表示节目被插入到 ItemId 对应节目的第 SegmentIndex 分片后面，否则插入到该节目之后。</li> <li>当 Operation 为 Delete 时，该字段必填，表示删除该节目。不能删除正在播放的节目。</li>
 * @method integer getSegmentIndex() 获取M3U8 文件分片的索引号。M3U8 文件第一个分片的 SegmentIndex 为0。当 Operation 为 InsertTemporary 且 ItemId 有值时该参数有效。
 * @method void setSegmentIndex(integer $SegmentIndex) 设置M3U8 文件分片的索引号。M3U8 文件第一个分片的 SegmentIndex 为0。当 Operation 为 InsertTemporary 且 ItemId 有值时该参数有效。
 * @method array getRoundPlaylist() 获取节目列表。当 Operation 为 Insert、InsertTemporary、Delete 时必填，表示要操作的节目列表。列表长度最大为10。
 * @method void setRoundPlaylist(array $RoundPlaylist) 设置节目列表。当 Operation 为 Insert、InsertTemporary、Delete 时必填，表示要操作的节目列表。列表长度最大为10。
 */
class HandleCurrentPlaylistRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 轮播播单唯一标识。
     */
    public $RoundPlayId;

    /**
     * @var string 操作类型，取值有：<li>Insert：向当前播放列表插入节目。插入的节目在后续轮播过程仍然有效。</li> <li>InsertTemporary：向当前播放列表临时插入节目。临时插入的节目只在本次轮播过程生效。</li><li>Delete：删除播放列表中的节目。不能删除正在播放的节目。</li>
     */
    public $Operation;

    /**
     * @var string 播单节目 ID。 <li>当 Operation 为 Insert 时，该字段必填，表示插入的节目列表位于该节目之后。</li> <li>当 Operation 为 InsertTemporary 时，该字段选填，不填时表示插入节目到最近的一个插入点上。当该字段填写时，如果同时填写 SegmentIndex，表示节目被插入到 ItemId 对应节目的第 SegmentIndex 分片后面，否则插入到该节目之后。</li> <li>当 Operation 为 Delete 时，该字段必填，表示删除该节目。不能删除正在播放的节目。</li>
     */
    public $ItemId;

    /**
     * @var integer M3U8 文件分片的索引号。M3U8 文件第一个分片的 SegmentIndex 为0。当 Operation 为 InsertTemporary 且 ItemId 有值时该参数有效。
     */
    public $SegmentIndex;

    /**
     * @var array 节目列表。当 Operation 为 Insert、InsertTemporary、Delete 时必填，表示要操作的节目列表。列表长度最大为10。
     */
    public $RoundPlaylist;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $RoundPlayId 轮播播单唯一标识。
     * @param string $Operation 操作类型，取值有：<li>Insert：向当前播放列表插入节目。插入的节目在后续轮播过程仍然有效。</li> <li>InsertTemporary：向当前播放列表临时插入节目。临时插入的节目只在本次轮播过程生效。</li><li>Delete：删除播放列表中的节目。不能删除正在播放的节目。</li>
     * @param string $ItemId 播单节目 ID。 <li>当 Operation 为 Insert 时，该字段必填，表示插入的节目列表位于该节目之后。</li> <li>当 Operation 为 InsertTemporary 时，该字段选填，不填时表示插入节目到最近的一个插入点上。当该字段填写时，如果同时填写 SegmentIndex，表示节目被插入到 ItemId 对应节目的第 SegmentIndex 分片后面，否则插入到该节目之后。</li> <li>当 Operation 为 Delete 时，该字段必填，表示删除该节目。不能删除正在播放的节目。</li>
     * @param integer $SegmentIndex M3U8 文件分片的索引号。M3U8 文件第一个分片的 SegmentIndex 为0。当 Operation 为 InsertTemporary 且 ItemId 有值时该参数有效。
     * @param array $RoundPlaylist 节目列表。当 Operation 为 Insert、InsertTemporary、Delete 时必填，表示要操作的节目列表。列表长度最大为10。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("SegmentIndex",$param) and $param["SegmentIndex"] !== null) {
            $this->SegmentIndex = $param["SegmentIndex"];
        }

        if (array_key_exists("RoundPlaylist",$param) and $param["RoundPlaylist"] !== null) {
            $this->RoundPlaylist = [];
            foreach ($param["RoundPlaylist"] as $key => $value){
                $obj = new RoundPlayListItemInfo();
                $obj->deserialize($value);
                array_push($this->RoundPlaylist, $obj);
            }
        }
    }
}
